<?php

namespace App\Http\Controllers;

use http\Client;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $date = date('d-m-Y');
        $date = str_replace('-', '', $date);
        $date_sum = array_sum(str_split($date));

        $client = new \GuzzleHttp\Client();
        $endpoint = 'https://www.cbr-xml-daily.ru/daily_json.js';
        $response = $client->get($endpoint);

        $content = json_decode($response->getBody());
        $gbp = round($content->Valute->GBP->Value);

        return view('index', [
            'date_sum' => $date_sum,
            'GBP' => $gbp
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
