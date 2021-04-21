@component('mail::message')

  # Olá {{$admin->name}}

  {{$teatcher_user->firstname}}, professor/a de {{$teatcher_user->matter}}, enviou-te uma candidatura.

  Obrigado,<br>
  {{ config('app.name') }}

@endcomponent
