<?php

namespace App\Mail;

use App\Models\SupportTicket;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SupportTicketIntern extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The support ticket instance.
     *
     * @var \App\Models\SupportTicket
     */
    public $ticket;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\SupportTicket $ticket
     * @return void
     */
    public function __construct(SupportTicket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->ticket->contact_type == 'calculator-offer') {
            return $this->from(['address' => 'no-reply@3dm.ch', 'name' => '3DM Support'])
                        ->subject(__('support.new-support-ticket').' - '.__('support.'.$this->ticket->contact_type))
                        ->view('mailable.supportTicketIntern');
        }
    }
}
