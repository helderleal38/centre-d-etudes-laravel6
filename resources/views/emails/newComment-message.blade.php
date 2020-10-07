@component('mail::message')
# Bonjour {{$admin->name}}

{{$comment->name}}, vous avez laissez un commentaire.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
