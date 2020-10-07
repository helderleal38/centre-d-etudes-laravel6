@component('mail::message')
# Bonjour {{$admin->name}}

{{$student_user->name}}, viens de vous envoyer une pré-inscription.

Il est interessé par le cours de {{$student_user->matter}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
