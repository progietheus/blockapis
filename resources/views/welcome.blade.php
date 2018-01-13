@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<br>    
<section>
<div class="container">
    <h1 class="is-size-2" style="display:inline">
        Binance API 
    </h1>
    <a class="github" href="https://github.com/binance-exchange/binance-official-api-docs/blob/master/rest-api.md"><i class="fa fa-github" aria-hidden="true"></i></a>
<hr>
</div>
<div class="container">
    <h1 class="title">
        API Key
    </h1>
    <h2 class="subtitle">
        Some of the the API calls require your API Key &amp; Secret. 
        <br><small class="has-text-info">Don't worry, <strong class="has-text-info">None</strong> of this information is being stored.</small>
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
      <div id="endpoint-list" class="column is-half endpoints-text" >
          
                <span class="is-size-3"> General endpoints</span> 
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/ping">
                    <span class="is-size-5 has-text-weight-bold">Test connectivity</span> <pre>GET /api/v1/ping</pre>
                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/time">
                    <span class="is-size-5 has-text-weight-bold">Check Server Time</span> <pre>GET /api/v1/time</pre>
            

                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/exchangeInfo">
                    <span class="is-size-5 has-text-weight-bold">Exchange Information</span> <pre>GET /api/v1/exchangeInfo</pre>
                  

                </div>
                
                <hr>
                <span class="is-size-3"> Market Data endpoints</span>
            
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/depth">
                    <span class="is-size-5 has-text-weight-bold">Order book</span> <pre>GET /api/v1/depth</pre>
                
                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/trades">
                    <span class="is-size-5 has-text-weight-bold">Recent trades list</span> <pre>GET /api/v1/trades</pre>
                 
                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/historicalTrades">
                    <span class="is-size-5 has-text-weight-bold"> Old trade lookup</span> <pre>GET /api/v1/historicalTrades</pre>
                  
                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/aggTrades">
                    <span class="is-size-5 has-text-weight-bold">Compressed/Aggregate trades list</span> <pre>GET /api/v1/aggTrades</pre>
                
                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/klines">
                    <span class="is-size-5 has-text-weight-bold">Kline/Candlestick data</span> <pre>GET /api/v1/klines</pre>
                   
                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v1/ticker/24hr">
                    <span class="is-size-5 has-text-weight-bold">24-hr ticker price change statistics</span> <pre>GET /api/v1/ticker/24hr</pre>
                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v3/ticker/price">
                    <span class="is-size-5 has-text-weight-bold">Symbol price ticker</span> <pre>GET /api/v3/ticker/price</pre>
                   
                </div>
                <div class="enpoint" data-endpoint="https://api.binance.com/api/v3/ticker/bookTicker">
                    <span class="is-size-5 has-text-weight-bold">Symbol order book ticker</span> <pre>GET /api/v3/ticker/bookTicker </pre>
                  
                </div>
                
                <hr>
      </div>
      <div class="column is-half">
                <h1 class="title">
                    Result 
                </h1>
                
                <p class="subtitle">
                    Results received from Binance
                </p>
            <a class="button is-danger is-outlined" v-on:click="clearResults">
              <i class="fa fa-eraser" aria-hidden="true"></i>&nbsp;&nbsp;Clear
            </a>
            <a class="button is-info is-outlined" v-on:click="replay">
              <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;&nbsp;Replay
            </a>
          <br><br>
            <pre>@{{response}}</pre>
      </div>
    </div>
</div>
</section>
@endsection