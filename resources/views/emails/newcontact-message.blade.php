@component('mail::message')
# Bonjour {{ $admin->name }}, vous avez un message de {{ $contact->name }}

--------------------------------Contenu du message-----------------------------

{{ $contact->subject }}

{{ $contact->message }}



Thanks,<br>
@endcomponent
