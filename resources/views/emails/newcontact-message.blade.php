@component('mail::message')

  # Olá {{ $admin->name }}, recebeu uma mensagem de {{ $contact->name }}

  -------------------------------- Mensagem -----------------------------

  {{ $contact->subject }}

  {{ $contact->message }}

  Obrigado,<br>

@endcomponent
