@component('mail::message')
# Bonjour {{$admin->name}}

{{$student->name}}, viens de vous envoyer une pré-inscription.

Il est interessé par le cours de {{$student->matter}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
