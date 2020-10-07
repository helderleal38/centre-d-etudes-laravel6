@component('mail::message')
# Bonjour {{$admin->name}}

{{$teatcher_user->firstname}}, professeur de {{$teatcher_user->matter}}, vous a envoyé une candidature.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
