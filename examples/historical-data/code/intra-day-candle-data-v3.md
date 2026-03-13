## Get data with a 1-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE848E01016", "minutes", 1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ' . $e->getMessage();
}
```

## Get data with a 3-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE848E01016", "minutes", 3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ' . $e->getMessage();
}
```

## Get data with a 5-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE848E01016", "minutes", 5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ' . $e->getMessage();
}
```

## Get data with a 15-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE848E01016", "minutes", 15);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ' . $e->getMessage();
}
```

## Get data with a 30-minute interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE848E01016", "minutes", 30);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ' . $e->getMessage();
}
```

## Get data with a 1-hour interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE848E01016", "hours", 1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ' . $e->getMessage();
}
```

## Get data with a 2-hour interval


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE848E01016", "hours", 2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ' . $e->getMessage();
}
```

## Get current day data


```php
<?php

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE848E01016", "days", 1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ' . $e->getMessage();
}
```
