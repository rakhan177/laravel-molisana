<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
      {{-- @php
      dump($pastaArray);
      echo $productId;
      @endphp --}}
      @include('struttura.header')
      <main class="main2">

        <div class="main2-content">
          <div class="main2-content-titolo">{{$pastaArray[$productId]['titolo']}}</div>
          <img src="{{$pastaArray[$productId]['src-h']}}">
          <img src="{{$pastaArray[$productId]['src-p']}}">
          <div class="main2-content-descrizione">{!!$pastaArray[$productId]['descrizione']!!}</div>
          {{-- per fare l' escape per i tag html usare questa sintassi: {!!var!!} --}}
        </div>

      </main>
      @include('struttura.footer')

    </body>
</html>
