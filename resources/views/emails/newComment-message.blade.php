@component('mail::message')

  # Olá {{$admin->name}}

  {{$comment_user->name}}, deixou um comentário de satisfação.


  Obrigado,<br>
  {{ config('app.name') }}
  
@endcomponent
