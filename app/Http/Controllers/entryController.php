<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class entryController extends Controller
{
    public function show() {
        return view('section.entry', ["title" => "Entry Data"]);
    }
    
    public function getInitialJsonObject() {
        
    }

    public function saveObject(Request $request) {
        $data = $request->data;
        // dd($data);
        
        Http::fake([
            'asdf.com' => Http::response(["data" => "ads"], 200)
        ]);

        $url = 'asdf.com';
        
        $body = [
            'username'=>'OVA000014',
            'password'=>'AAaa123$',
            'device_id'=> ''
        ];

        $headers = [
            'x-pos-user'=>"k3m1tr44n",
            'x-pos-password'=>"k3m1tr44nP445"
        ];

        // $response = Http::withHeaders($headers)->post($url, $body);
        $response = Http::post($url);
        // dd(json_decode($response, true));
        $responseJson = json_decode($response, true);
        return [
            "data" => $responseJson["data"],
            "status" => $response->status()
        ];
        
    }

    public function saveData() {

    }

    public function sendData() {

    }
}
