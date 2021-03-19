<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\SupportTicket;
use App\Mail\SupportTicketConfirmation;
use App\Mail\SupportTicketIntern;
use App\Http\Requests\StoreSupportTicketRequest;

class SupportTicketController extends Controller
{
    public function store( StoreSupportTicketRequest $request )
    {
        $ticket = new SupportTicket();
        $ticket->name = $request['name'];
        $ticket->email = $request['email'];

        switch ($request['contact_type']) {
            case 'calculator-offer':
                $ticket->contact_type = $request['contact_type'];
                $ticket->message = calculatorOfferMessage($request);
                break;
            default:
                break;
        }

        $ticket->save();

        Mail::to($request['email'])->send(new SupportTicketConfirmation($ticket));
        Mail::to('contact@argonstudio.ch')->send(new SupportTicketIntern($ticket));

        return response()->json(['error' => 'Error msg'], 200); // Status code here
    }
}

function calculatorOfferMessage($request): string {
    $message = "Titre : ".__('calculator.'.$request['courtesy']).
    "<br>Prénom et Nom : ".$request['name'].
    "<br>Entreprise : ".$request['company'].
    "<br>E-mail : ".$request['email'].
    "<br>Nom du concours : ".$request['competition_name'].
    "<br>Date de rendu officiel : ".\Carbon\Carbon::parse($request['due_date'])->format('d.m.Y').
    "<br>Style : ".__('calculator.'.$request['style']).
    "<br>Nombre d'images : ".$request['nb_renders'];
    return $message;
}
