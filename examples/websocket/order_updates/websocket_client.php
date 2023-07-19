<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use WebSocket\Client as WebSocketClient;
use Upstox\Client\Configuration;
use Upstox\Client\Api\WebsocketApi;

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

function getPortfolioStreamFeedAuthorize($apiVersion, $accessToken)
{
    $client = new Client([
        'base_uri' => 'https://upstox.com', // Assuming this is the base url
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken
        ]
    ]);

    $response = $client->request('POST', '/api/' . $apiVersion . '/portfolio/stream-feed/authorize');

    return json_decode((string) $response->getBody(), true);
}

function fetchOrderUpdates()
{
    $apiVersion = '2.0';
    $accessToken = 'ACCESS_TOKEN';

    $configuration = Configuration::getDefaultConfiguration();
    $configuration->setAccessToken($accessToken);

    $response = get_portfolio_stream_feed_authorize($apiVersion, $configuration);

    $client = new WebSocketClient($response['data']['authorized_redirect_uri'], [
        'timeout' => 10,
        'context' => stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false
            ]
        ])
    ]);

    echo "Connection successful!\n";

    while (true) {
        try {
            $message = $client->receive();  // This will block until a message arrives
            echo "Received message: $message\n";
        } catch (\Exception $e) {
            echo "Error: {$e->getMessage()}\n";
            break;
        }
    }
}

fetchOrderUpdates();
