<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Upstox\Client\Configuration;
use Upstox\Client\Api\WebsocketApi;
use function Amp\Websocket\Client\connect;

function get_portfolio_stream_feed_authorize($api_version, $configuration)
{
    $api_instance = new WebsocketApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new Client(),
        $configuration
    );
    $api_response = $api_instance->getPortfolioStreamFeedAuthorize($api_version);
    return $api_response;
}

function fetchOrderUpdates()
{
    $apiVersion = '2.0';
    $accessToken = 'ACCESS_TOKEN';

    $configuration = Configuration::getDefaultConfiguration();
    $configuration->setAccessToken($accessToken);

    $response = get_portfolio_stream_feed_authorize($apiVersion, $configuration);

    $connection = connect($response['data']['authorized_redirect_uri']);

    echo "Connection successful!\n";

    foreach ($connection as $message) {
        $payload = $message->buffer();

        printf("Received: %s\n", $payload);

        if ($payload === '100') {
            $connection->close();
            break;
        }
    }
}

fetchOrderUpdates();
