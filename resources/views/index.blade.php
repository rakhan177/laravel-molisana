<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IndexPage</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
      {{-- @php
      dump($pastaArray);
      @endphp --}}
      @include('struttura.header')
      <main class="main1">

      <h2>LE LUNGHE</h2>

      <div class="main1-content">

        @foreach ($pastaArray as $id => $product)
          @if($product['tipo'] === "lunga")
          <a href="/product/{{$id}}">
          <img src="{{$product['src']}}">
          </a>
          @endif
        @endforeach
      </div>
      <h2>LE CORTE</h2>
      <div class="main1-content">
        @foreach ($pastaArray as $id => $product)
          @if($product['tipo'] === "corta")
          <a href="/product/{{$id}}">
          <img src="{{$product['src']}}">
          </a>
          @endif
        @endforeach
      </div>
      <h2>LE CORTISSIME</h2>
      <div class="main1-content">
        @foreach ($pastaArray as $id => $product)
          @if($product['tipo'] === "cortissima")
          <a href="/product/{{$id}}">
          <img src="{{$product['src']}}">
          </a>
          @endif
        @endforeach
      </div>

      </main>
      @include('struttura.footer')
    </body>
</html>
