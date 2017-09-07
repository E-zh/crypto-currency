@extends('crypto-currency::layouts.layout')

@section('content')
    <div id="result" v-cloak>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">BITHUMB</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <form id="orderbook" v-on:submit="sendFormOrderBook" method="post"
                              action="{{ route('test::bithumb::orderbook') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="sel-orderbook"
                                       class="col-md-4 control-label">Получить котировки:</label>

                                <div class="col-md-4">
                                    <select id="sel-orderbook" name="orderbook">
                                        <option value="All" selected>Все котировки</option>
                                        @foreach(config('crypto-currency.bithumb.types-currencies') as $currency)
                                            <option value="{{ $currency }}">{{ $currency }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <button id="oBookButton" data-loading-text="Loading..." type="submit"
                                            class="btn btn-primary">Submit
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-6">
                        <form id="ticker" v-on:submit="sendFormTicker" method="post"
                              action="{{ route('test::bithumb::ticker') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="sel-ticker"
                                       class="col-md-4 control-label">Посмотреть тикеры:</label>

                                <div class="col-md-4">
                                    <select id="sel-ticker" name="ticker">
                                        <option value="All" selected>Все тикеры</option>
                                        @foreach(config('crypto-currency.bithumb.types-currencies') as $currency)
                                            <option value="{{ $currency }}">{{ $currency }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <button id="oTickerButton" data-loading-text="Loading..." type="submit"
                                            class="btn btn-primary">Submit
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-6">
                        <form id="history" v-on:submit="sendFormHistory" method="post"
                              action="{{ route('test::bithumb::history') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="sel-history"
                                       class="col-md-4 control-label">История транзакций:</label>

                                <div class="col-md-4">
                                    <select id="sel-history" name="history">
                                        @foreach(config('crypto-currency.bithumb.types-currencies') as $currency)
                                            <option value="{{ $currency }}">{{ $currency }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <button id="oHistoryButton" data-loading-text="Loading..." type="submit"
                                            class="btn btn-primary">Submit
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">RESULT (JSON)</h3>
            </div>
            <div class="panel-body">
                <div id="result">
                    {{-- RESULT VUE HERE! --}}
                    @{{ test }}
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="/libs/js/api-test.js"></script>
@endsection
