# API Bithumb and Bitfinex exchanges

## Install

* Add in your `composer.json`
```json
"e-zh/crypto-currency": "dev-master"
```

* Add in your `composer.json`
```json
"repositories": [
    {
      "type": "git",
      "url": "git@github.com:E-zh/crypto-currency.git"
    }
  ]
```
* Run in console `composer update`
* If you use Laravel < v5.5, add in your `config/app.php`:
```php
Ezh\CryptoCurrency\CryptoCurrencyServiceProvider::class,
```
* Run in console `php artisan vendor:publish --tag=crypto-currency`
* Enter address in you browser: `<your_site>/test`

## Artisan commands

### Commands for Bithumb Exchange:

* `bithumb:orderbook <type>`

* `bithumb:ticker <type>`

* `bithumb:traced <type>` Dont use type `ALL` here!

* Types for this command:
```text
BTC, ETH, DASH, LTC, ETC, XRP, BCH, XMR, ALL(For all currencies)
```

### Commands for Bitfinex Exchange:

* `bitfinex:orderbook <type>`

* `bitfinex:ticker <type>`

* `bitfinex:traced <type>`

* Types for this command:
```text
btcusd, ltcusd, ltcbtc, ethusd, ethbtc, etcbtc, etcusd, rrtusd, rrtbtc, zecusd, zecbtc, xmrusd, xmrbtc, dshusd, dshbtc,
bccbtc, bcubtc, bccusd, bcuusd, xrpusd, xrpbtc, iotusd, iotbtc, ioteth, eosusd, eosbtc, eoseth, sanusd, sanbtc, saneth,
omgusd, omgbtc, omgeth, bchusd, bchbtc, bcheth
```
