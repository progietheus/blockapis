<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected function MakeRequest(Request $request) {
        $type = $request->query()["type"];
        $endpoint = $request->query()["endpoint"];
        $client = new \GuzzleHttp\Client();
        $res = $client->request($type, $endpoint);
        echo $res->getBody();
        // '{"id": 1420053, "name": "guzzle", ...}'

       
    }
}
