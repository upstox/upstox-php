## Get historical candle data with a 1-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = '1minute';
$toDate = '2023-11-13';
$fromDate = '2023-11-12';

try {
    $result = $apiInstance->getHistoricalCandleData1($instrumentKey, $interval, $toDate, $fromDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a 30-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = '30minute';
$toDate = '2023-11-13';
$fromDate = '2023-11-12';

try {
    $result = $apiInstance->getHistoricalCandleData1($instrumentKey, $interval, $toDate, $fromDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a daily interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = 'day';
$toDate = '2023-11-13';
$fromDate = '2023-11-12';

try {
    $result = $apiInstance->getHistoricalCandleData1($instrumentKey, $interval, $toDate, $fromDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a weekly interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = 'week';
$toDate = '2023-11-13';
$fromDate = '2023-10-13';

try {
    $result = $apiInstance->getHistoricalCandleData1($instrumentKey, $interval, $toDate, $fromDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a monthly interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = 'month';
$toDate = '2023-11-13';
$fromDate = '2022-10-13';

try {
    $result = $apiInstance->getHistoricalCandleData1($instrumentKey, $interval, $toDate, $fromDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get historical candle data with a 1-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = '1minute';
$toDate = '2023-11-13';

try {
    $result = $apiInstance->getHistoricalCandleData($instrumentKey, $interval, $toDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData: ' . $e->getMessage();
}
```

## Get data with a 30-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = '30minute';
$toDate = '2023-11-13';

try {
    $result = $apiInstance->getHistoricalCandleData($instrumentKey, $interval, $toDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData: ' . $e->getMessage();
}
```

## Get data with a daily interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = 'day';
$toDate = '2023-11-13';

try {
    $result = $apiInstance->getHistoricalCandleData($instrumentKey, $interval, $toDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData: ' . $e->getMessage();
}
```

## Get data with a weekly interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = 'week';
$toDate = '2023-11-13';

try {
    $result = $apiInstance->getHistoricalCandleData($instrumentKey, $interval, $toDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData: ' . $e->getMessage();
}
```

## Get data with a monthly interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client()
);

$instrumentKey = 'NSE_EQ|INE669E01016';
$interval = 'month';
$toDate = '2023-11-13';

try {
    $result = $apiInstance->getHistoricalCandleData($instrumentKey, $interval, $toDate, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData: ' . $e->getMessage();
}
```
