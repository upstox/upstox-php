## Get market holidays

```php
<?php

$config = (new Upstox\Client\Configuration());

$apiInstance = new Upstox\Client\Api\USMarketHolidaysAndTimingsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsHolidays();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USMarketHolidaysAndTimingsApi->getUsHolidays: ' . $e->getMessage();
}
```

## Get market holiday status of a date

```php
<?php

$config = (new Upstox\Client\Configuration());

$apiInstance = new Upstox\Client\Api\USMarketHolidaysAndTimingsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsHoliday('2026-12-25');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USMarketHolidaysAndTimingsApi->getUsHoliday: ' . $e->getMessage();
}
```

## Get exchange timings of a date

```php
<?php

$config = (new Upstox\Client\Configuration());

$apiInstance = new Upstox\Client\Api\USMarketHolidaysAndTimingsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsExchangeTimings('2026-10-29');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USMarketHolidaysAndTimingsApi->getUsExchangeTimings: ' . $e->getMessage();
}
```

## Get market status

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USMarketHolidaysAndTimingsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsMarketStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USMarketHolidaysAndTimingsApi->getUsMarketStatus: ' . $e->getMessage();
}
```
