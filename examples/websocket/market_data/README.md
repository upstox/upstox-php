# Market Stream feed websocket client

This PHP project demonstrates how to connect to the Upstox WebSocket API for streaming live market data. It fetches market data for a list of instrument keys and decodes the incoming protobuf data to a JSON format.

## Getting Started

These instructions will help you run the sample websocket client.

### Prerequisites

Before you can run this script, you need to have PHP 7.4 or later installed on your system. If you haven't installed PHP yet, you can download it from the official website:

[Download PHP](https://www.php.net/downloads.php)

You will also need to install several PHP packages:

- `upstox-php-sdk`
- `websocket-client`
- `guzzlehttp/guzzle`
- `protobuf`

You can install these packages using composer, a package manager for PHP. Open a terminal and enter the following command:

```sh
composer require upstox-php-sdk websocket-client guzzlehttp/guzzle protobuf
```

### Protocol Buffers (Protobuf) Classes Generation

Generate the Protobuf classes in PHP from `.proto` file.

Before you can generate the Protobuf classes, you need to download the [proto file](https://assets.upstox.com/feed/market-data-feed/v1/MarketDataFeed.proto) and install the Protocol Buffers compiler (protoc).

To download the Protocol Buffers compiler, go to the [Google Protocol Buffers GitHub repository](https://github.com/protocolbuffers/protobuf/releases) and download the appropriate `protoc-<version>-<os>.zip` file for your operating system. Extract the ZIP file and add the `bin` directory to your system PATH.

For example, on a Unix-like system, you can add the directory to your PATH like this:

```bash
export PATH=$PATH:/path/to/protoc/bin
```

You can confirm that the compiler is correctly installed by opening a new terminal window and running the following command:

```
protoc --version
```

This should print the protoc version.

#### Install Protobuf Runtime for PHP

You can install the Protobuf runtime for PHP using the [PECL](https://pecl.php.net) package manager:

```
pecl install protobuf
```

#### Generate Protobuf classes

Navigate to the directory containing your .proto files and run the following command:

```
protoc --php_out=. *.proto
```

This will generate .php files for each .proto file in the directory.

In your PHP code, you can now import the generated classes like any other PHP module. For example, if you have a file MarketDataFeed.proto and you've generated MarketDataFeed.php, you can import it like this:

```
require_once 'MarketDataFeed.php';
```

Sample classes included as part of this repo.

### Configuration

The script requires an Upstox API access token for authorization. You will need to specify your Upstox API access token in the PHP script. Look for the line below and replace 'ACCESS_TOKEN' with your actual access token.

```
$accessToken = 'ACCESS_TOKEN';
```

### Running the Script

After installing the prerequisites and setting up your access token, you can run the script. Navigate to the directory containing the script and run the following command:

```
php websocket_client.php
```

Replace websocket_client.php with the name of your PHP script.

## Understanding the Code

The script first sets up an SSL context and an OAuth2 access token for authorization. It fetches the authorized redirect URI from the Upstox server and uses this to establish a connection to the WebSocket server.

The script sends a subscription request for "NSE_INDEX|Nifty Bank" and "NSE_INDEX|Nifty 50". When it receives data from the server, it decodes the protobuf data into a FeedResponse object, converts this object into a JSON string, and then prints the JSON string.

## Support

If you encounter any problems or have any questions about this project, feel free to open an issue in this repository.

## Disclaimer

This is a sample script meant for educational purposes. It may require modifications to work with your specific requirements.

Please replace 'ACCESS_TOKEN' with your actual access token and websocket_client.php with the name of your PHP script. Modify any other details as needed to fit your project.


