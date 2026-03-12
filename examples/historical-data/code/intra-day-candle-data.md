## Get intraday candle data with a 1-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = '1minute';

try {
    $result = $apiInstance->getIntraDayCandleData($instrumentKey, $interval, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getIntraDayCandleData: ' . $e->getMessage();
}
```

## Get intraday candle data with a 30-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = '30minute';

try {
    $result = $apiInstance->getIntraDayCandleData($instrumentKey, $interval, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getIntraDayCandleData: ' . $e->getMessage();
}
```
