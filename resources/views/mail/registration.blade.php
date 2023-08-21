@php
      $url = $url;
@endphp

@component('mail::message')
  # Hi, {{ $name }}
  Registrasi anda berhasil !

  Anda dapat login dengan menggunakan password : <b>{{ $password }}</b>

  Silahkan aktifasi akun anda dengan menekan tombol di bawah ini

  @component('mail::button', ['url' => $url])
    Aktifkan Akun
  @endcomponent

  Terimakasih,<br>
  Komunitas Organik Indonesia
@endcomponent
