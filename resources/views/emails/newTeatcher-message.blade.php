@component('mail::message')
# Bonjour {{$admin->name}}

{{$teatcher->firstname}}, professeur de {{$teatcher->matter}}, vous a envoyé une candidature.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
