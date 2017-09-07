@extends('crypto-currency::layouts.layout')

@section('result')
    <div class="jumbotron">
        <h1>TEST</h1>
    </div>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">LINKS</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li><a href="{{ route('test::bithumb') }}">Bithumb API test</a></li>
                <li><a href="{{ route('test::bitfinex') }}">Bitfinex API test</a></li>
            </ul>
        </div>
    </div>
@endsection
