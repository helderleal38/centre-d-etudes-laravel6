@component('mail::message')

  # Olá {{$admin->name}}

  {{$student_user->name}}, enviou uma pré-inscrição, para aulas de {{$student_user->matter}}

  Obrigado,<br>
  {{ config('app.name') }}
  
@endcomponent
