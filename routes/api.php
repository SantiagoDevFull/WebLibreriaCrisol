<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/catalog', function (\Illuminate\Http\Request $request) {
    $page = $request->input('page', 1);
    $maxResults = 20;
    $startIndex = ($page - 1) * $maxResults;

    $response = Http::get('https://www.googleapis.com/books/v1/volumes', [
        'q' => 'a',
        'startIndex' => $startIndex,
        'maxResults' => $maxResults,
        'key' => 'AIzaSyDLeq15SgnSznzB-DQ1HwF3sttqQldQI40', // coloca tu clave aquí
    ]);

    return $response->json();
});
