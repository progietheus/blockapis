<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\BARequest;
use App\Limit;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected function MakeRequest(Request $request) {     
        $type = $request->query()["type"];
        $endpoint = $request->query()["endpoint"];
        $exchange = $request->query()["exchange"];
        
//      Get visitor IP
        $ip = request()->ip();
        
//      TODO: Check if limit has been reached before attempting request
        
//      Make Request to exchange api
        $client = new \GuzzleHttp\Client();
        $res = $client->request($type, $endpoint);
        
//      Log visitor & endpoint they are accesing for metrics
        $BARequest = new BARequest;
        $BARequest->visitor = $ip;
        $BARequest->request =  $endpoint;
        $BARequest->save();
        
//      If a limit status code is received from the exchange, a limit entry is created
        $status =  $res->getStatusCode();
        
//      Binance = 429 
        if ($status = 429) {            
            $limit = new Limit;
            $limit->exchange = $exchange;
            $limit->visitor = $ip;
            $limit->time_to_stop_till = date('Y-m-d H:i:s', strtotime('+30 minutes', time()));
            $limit->save();        
        }
        
        echo $res->getBody();
    }
    
}
