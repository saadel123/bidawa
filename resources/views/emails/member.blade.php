@component('mail::message')
Bonjour

Vous avez un nouveau message de: <strong>{{ $details['nom'].' '.$details['prenom'] }}</strong> <br>
<strong>Nom et Prenom:</strong> {{ $details['nom'].' '.$details['prenom'] }} <br>
<strong>Email:</strong> {{ $details['email'] }} <br>
@if(!empty($details['tele']))
<strong>Télephone:</strong> {{ $details['tele'] }} <br>
@endif
<strong>Adresse:</strong> {{ $details['adresse'] }} <br>
<strong>Cotisation:</strong> {{ $details['cotisation'] }}<br><br>

Cordialement,<br>
L'équipe bidawaplus.
@endcomponent