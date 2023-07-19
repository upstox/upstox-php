<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use WebSocket\Client as WebSocketClient;
use Upstox\Client\Configuration;
use Upstox\Client\Api\WebsocketApi;
use Com\Upstox\Marketdatafeeder\Rpc\Proto\FeedResponse;

/**
 * Function to decode Protobuf messages.
 *
 * @param string $buffer The protobuf message as a string.
 * @return FeedResponse The decoded FeedResponse object.
 */
function decodeProtobuf($buffer)
{
    $feedResponse = new FeedResponse();
    $feedResponse->mergeFromString($buffer);

    return $feedResponse;
}

/**
 * Function to get market data feed authorization.
 *
 * @param string $apiVersion The API version.
 * @param Configuration $configuration The configuration object.
 * @return array The API response.
 */
function getMarketDataFeedAuthorize($apiVersion, $configuration)
{
    $apiInstance = new WebsocketApi(
        new Client(),
        $configuration
    );
    $apiResponse = $apiInstance->getMarketDataFeedAuthorize($apiVersion);
    return $apiResponse;
}

/**
 * Function to fetch market updates.
 */
function fetchMarketUpdates()
{
    $apiVersion = '2.0';
    $accessToken = 'ACCESS_TOKEN';

    // Configure with your access token
    $configuration = Configuration::getDefaultConfiguration();
    $configuration->setAccessToken($accessToken);

    // Get the authorized URL for the WebSocket connection
    $response = getMarketDataFeedAuthorize($apiVersion, $configuration);

    // Create a WebSocket client instance with the authorized URL and disable SSL verification
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

    $client->setTimeout(1);  // Wait for 1 second

    // Message payload to send to the server
    $data = [
        "guid" => "someguid",
        "method" => "sub",
        "data" => [
            "mode" => "full",
            "instrumentKeys" => ["NSE_INDEX|Nifty Bank", "NSE_INDEX|Nifty 50"]
        ]
    ];

    // Send the data as binary
    $client->binary(json_encode($data));

    // Continuously receive updates until an error occurs
    while (true) {
        try {
            // Receive and decode the incoming message
            $message = $client->receive();
            $decodedData = decodeProtobuf($message);

            // Convert the decoded data to JSON and print it
            var_dump($decodedData->serializeToJsonString());
        } catch (\Exception $e) {
            // Print the error message and exit the loop if an error occurs
            echo "Error: {$e->getMessage()}\n";
            break;
        }
    }
}

// Start fetching market updates
fetchMarketUpdates();
