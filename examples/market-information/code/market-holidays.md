## Get market holidays for current year


```php
<?php

$apiInstance = new Upstox\Client\Api\MarketHolidaysAndTimingsApi(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHolidays();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketHolidaysAndTimingsApi->getHolidays: ' . $e->getMessage();
}
```

## Get market holiday status of a date


```php
<?php

$apiInstance = new Upstox\Client\Api\MarketHolidaysAndTimingsApi(
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHoliday("2024-01-22");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketHolidaysAndTimingsApi->getHoliday: ' . $e->getMessage();
}
```
