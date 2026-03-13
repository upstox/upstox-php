## Get data with a 1-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE848E01016", "minutes", 1, "2025-01-02", "2025-01-01");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a 3-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE848E01016", "minutes", 3, "2025-01-02", "2025-01-01");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a 15-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE848E01016", "minutes", 15, "2025-01-04", "2025-01-01");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a 1-hour interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE848E01016", "hours", 1, "2025-02-01", "2025-01-01");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a 4-hour interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE848E01016", "hours", 4, "2025-02-01", "2025-01-01");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a daily interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE848E01016", "days", 1, "2025-03-01", "2025-01-01");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a weekly interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE848E01016", "weeks", 1, "2025-01-01", "2024-01-01");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ' . $e->getMessage();
}
```

## Get data with a monthly interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE848E01016", "months", 1, "2025-01-01", "2010-01-01");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ' . $e->getMessage();
}
```
