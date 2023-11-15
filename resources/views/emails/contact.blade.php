
@component('mail::message')
Bonjour

Vous avez un nouveau message de: <strong>{{ $details['name'] }}</strong> <br>
<strong>Nom et Prenom:</strong> {{ $details['name'] }} <br>
<strong>Email:</strong> {{ $details['email'] }} <br>
@if(!empty($details['tele']))
<strong>Télephone:</strong> {{ $details['tele'] }} <br>
@endif
<strong>choix:</strong> {{ $details['choix'] }} <br>
<strong>Message:</strong> {{ $details['message'] }}<br><br>
Cordialement,<br>
L'équipe bidawaplus.
@endcomponent