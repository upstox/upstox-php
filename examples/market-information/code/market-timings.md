## Get market timings of a date


```php
<?php

$apiInstance = new Upstox\Client\Api\MarketHolidaysAndTimingsApi(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getExchangeTimings("2024-01-22");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketHolidaysAndTimingsApi->getExchangeTimings: ' . $e->getMessage();
}
```
