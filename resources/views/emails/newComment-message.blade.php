@component('mail::message')
# Bonjour {{$admin->name}}

{{$comment_user->name}}, vous avez laissez un commentaire.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
