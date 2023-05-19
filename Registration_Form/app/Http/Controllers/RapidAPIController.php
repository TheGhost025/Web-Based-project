<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class RapidAPIController extends Controller
{
    public function getActor($date)
    {
        $day = date("d", strtotime($date));
        $month = date("m", strtotime($date));
        $response = Http::withoutVerifying()->withHeaders(['X-RapidAPI-Key' => '6d0477b17emshf69bf945be50827p1a5c94jsn4bf4bb171027', 'X-RapidAPI-Host' => 'online-movie-database.p.rapidapi.com'])
        ->withOptions(["verify"=>false])
        ->get('https://online-movie-database.p.rapidapi.com/actors/list-born-today?month='.$month.'&day='.$day);


        $data = json_decode($response->getBody(), true);

        $data1 = $this->getBio($data);

        return $data1;
    }

    public function getBio($data){
        $data1 = array();
        $i = 0;
        foreach ($data as $d){
            if($i < 10){
                $response = Http::withoutVerifying()->withHeaders(['X-RapidAPI-Key' => '6d0477b17emshf69bf945be50827p1a5c94jsn4bf4bb171027', 'X-RapidAPI-Host' => 'online-movie-database.p.rapidapi.com'])
                ->withOptions(["verify"=>false])
                ->get('https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst='.Str::substr($d,6,9));
                array_push($data1,json_decode($response->getBody(), true));  
                $i++;
            }
        }
        return $data1;
    }
}
