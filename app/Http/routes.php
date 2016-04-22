<?php

use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
	return view('syotatiedot');
});
Route::post('/generate', ['as' => 'generate', 'uses' => 'PDFController@generate']);

Route::get('/test', function () {
    return view('kokonaisuus')->with([
    	'firmanNimi' => 'Nollaversio IT',
    	'firmanOsoite' => 'Bulevardi 7, 00100 Helsinki',
    	'vakuutusyhtio' => 'Lähi-Tapiola Oy',
    	'paivays'    => (new Carbon)->format('d.m.Y'),
    	'laakari'    => 'Lääkäriasema Mehiläinen (Kaarina)',
    	'tyosuojeluvaltuutettu' => 'Jaakko Mehiläinen',
    	'tyosuojeluvaravaltuutettu' => 'Maija Kimalainen',
    	'arviointipvm'              => (new Carbon)->subDays(388)->format('d.m.Y'),

    ]);

});


Route::post('receivedata', ['as' => 'receivedata', 'uses' => 'PDFController@receive']);
