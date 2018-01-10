@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<br>    
<section>
<div class="container">
    <h1 class="is-size-2">
        Development Console
    </h1>
<hr>
</div>
<div class="container">
    <h1 class="title">
        Binance API Key
    </h1>
    <h2 class="subtitle">
        Enter your Biance API Key and Secret below
        <br/>
        <a href="https://www.binance.com/userCenter/createApi.html" class="is-size-7">Find your API key here</a>
    </h2>
    <div class="field">
      <div class="control">  
        <input class="input is-primary" type="text" placeholder="API Key" v-model="apiKey">
      </div>
    </div>
    <div class="field">
      <div class="control">
        <input class="input is-primary" type="text" placeholder="Secret Key" v-model="secretKey">
      </div>
    </div>
<hr>
</div>
<div class="container">
    <div class="columns">
      <div class="column is-half endpoints-text">
                <h1 class="title">
                    Binance 
                </h1>
                <p class="subtitle">
                    Interacting with the <strong>Binance API</strong>
                </p>
                <hr>
                <span class="is-size-3"> General endpoints</span> 
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Test connectivity</span> <pre>GET /api/v1/ping</pre>
                    <a class="button  execute-btn" v-on:click="initRequest('get','https://api.binance.com/api/v1/ping')">
                        Execute
                    </a>
                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Check Server Time</span> <pre>GET /api/v1/time</pre>
                    <a class="button  execute-btn" v-on:click="initRequest('get','https://api.binance.com/api/v1/time')">
                        Execute
                    </a>

                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Exchange Information</span> <pre>GET /api/v1/exchangeInfo</pre>
                    <a class="button  execute-btn" v-on:click="initRequest('get','https://api.binance.com/api/v1/exchangeInfo')">
                        Execute
                    </a>

                </div>
                
                <hr>
                <span class="is-size-3"> Market Data endpoints</span>
            
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Order book</span> <pre>GET /api/v1/depth</pre>
                    <a class="button  execute-btn">
                        Execute
                    </a>
                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Recent trades list</span> <pre>GET /api/v1/trades</pre>
                    <a class="button  execute-btn">
                        Execute
                    </a>
                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold"> Old trade lookup</span> <pre>GET /api/v1/historicalTrades</pre>
                    <a class="button  execute-btn">
                        Execute
                    </a>
                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Compressed/Aggregate trades list</span> <pre>GET /api/v1/aggTrades</pre>
                    <a class="button  execute-btn">
                        Execute
                    </a>
                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Kline/Candlestick data</span> <pre>GET /api/v1/klines</pre>
                    <a class="button  execute-btn">
                        Execute
                    </a>
                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">24-hr ticker price change statistics</span> <pre>GET /api/v1/ticker/24hr</pre>
                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Symbol price ticker</span> <pre>GET /api/v3/ticker/price</pre>
                    <a class="button  execute-btn">
                        Execute
                    </a>
                </div>
                <div class="enpoint">
                    <span class="is-size-5 has-text-weight-bold">Symbol order book ticker</span> <pre>GET /api/v3/ticker/bookTicker </pre>
                    <a class="button  execute-btn">
                        Execute
                    </a>
                </div>
                
                <hr>
      </div>
      <div class="column is-half">
                <h1 class="title">
                    Results 
                </h1>
                <p class="subtitle">
                    Results received from Binance
                </p>
            <pre>@{{response}}</pre>
            <hr/>
            <a class="button is-danger is-outlined" style="width:100%" v-on:click="clearResults">
              Clear
            </a>
      </div>
    </div>
</div>
</section>
@endsection