<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use function Amp\Websocket\Client\connect;
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

    // Check if the buffer is not null and is a non-empty string
    if ($buffer !== null && $buffer !== '') {
        $feedResponse->mergeFromString($buffer);
    } else {
        // Handle the case where buffer is null or empty
        // For example, you might want to log this situation or throw an exception
        echo "Warning: Buffer is null or empty.\n";
    }

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

    $connection = connect($response['data']['authorized_redirect_uri']);

    echo "Connection successful!\n";

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
    $binaryData = json_encode($data);

    $connection->sendBinary($binaryData);

    foreach ($connection as $message) {
        $payload = $message->buffer();

        if ($payload === '100') {
            $connection->close();
            break;
        }

        if (!empty($payload)) {
            $decodedData = decodeProtobuf($payload);
            // Convert the decoded data to JSON and print it
            var_dump($decodedData->serializeToJsonString());
        }
    }
}

// Start fetching market updates
fetchMarketUpdates();
