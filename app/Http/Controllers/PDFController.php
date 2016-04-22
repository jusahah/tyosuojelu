<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

class PDFController extends Controller
{
    

    public function receive(Request $request) {
    	$input = $request->all();

    	$email = $input['email'];
    	$htmls = $input['htmls'];

    	$client = new GuzzleHttp\Client();

    	foreach ($htmls as $key => $htmlArr) {
    		$html = $htmlArr['html'];
    		$contentName = $htmlArr['name'];
    		//$pdf = \App::make('dompdf.wrapper');
    		$totalView = \View::make('pdf_headpart', ['html' => $html]);
    		$totalHTML = $totalView->render();
			//$pdf->loadHTML();
			//$pdf->save($contentName . '.pdf');
			$res = $client->request('POST', 'http://localhost:8077', [
				'name' => $contentName,
				'html' => $totalHTML
			]);
    	}

		return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }

    public function generate(Request $request) {
    	$this->validate($request, [
        	'firmanNimi' => 'required|max:128',
        	'firmanOsoite' => 'required|max:256',
        	'vakuutusyhtio' => 'required|max:128',
        	'laakari' => 'required|max:128',
        	'tyosuojeluvaltuutettu' => 'required|max:128',
        	'tyosuojeluvaravaltuutettu' => 'required|max:128',
        	'docheader' => 'max:1024',
        	'docfooter' => 'max:1024'
    	]);
    	$bindings = $request->all();
    	$bindings['arviointipvm'] = (new Carbon)->subDays(388)->format('d.m.Y');
    	$bindings['paivays'] = (new Carbon)->format('d.m.Y');
    	$bindings['nodeURL'] = env('NODEURL');
    	return view('kokonaisuus')->with($bindings);
    }
}
