<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <div style="font-size: 15px;line-height: 1.2;">
        <h2 style="font-size: 1.2em;font-weight: bold;">
            Un nouveau ticket a été ouvert
        </h2>
        <table style="border: 1px solid black;border-collapse: collapse;">
            <tr>
                <th style="padding: 8px;text-align: left;vertical-align: top;">ID du ticket</th>
                <td style="padding: 8px;">{{ $ticket->id }}</td>
            </tr>
            <tr>
                <th style="padding: 8px;text-align: left;vertical-align: top;">Type de ticket</th>
                <td style="padding: 8px;">{{ __('support.'.$ticket->contact_type) }}</td>
            </tr>
            <tr>
                <th style="padding: 8px;text-align: left;vertical-align: top;">Nom du client</th>
                <td style="padding: 8px;">{{ $ticket->name }}</td>
            </tr>
            <tr>
                <th style="padding: 8px;text-align: left;vertical-align: top;">Email</th>
                <td style="padding: 8px;">{{ $ticket->email }}</td>
            </tr>
            <tr>
                <th style="padding: 8px;text-align: left;vertical-align: top;">Message</th>
                <td style="padding: 8px;">{!! $ticket->message !!}</td>
            </tr>
        </table>
    </div>
</body>
</html>
