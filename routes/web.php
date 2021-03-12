<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  // prendiamo l' array pasta e inviamolo al template come parametro che diventerà una variabile:
    $pasta = config('pasta');
    // dump($pasta);
    return view('index', [
      // creiamo l' array pastaArray dalla variabile inviata
      'pastaArray' => $pasta
    ]);
});



Route::get('/product/{id}', function ($id) {
    $pasta = config('pasta');
    return view('product.prodotti', ['productId' => $id, 'pastaArray' => $pasta]);
});
// si inserisce nella get /product/id, l' id viene passato alla funzione e
// ritorna la pagina prodotti con la variabile dell' id richiesto.
