# Market Stream feed websocket client

This PHP project demonstrates how to connect to the Upstox WebSocket API for streaming live market data. It fetches market data for a list of instrument keys and decodes the incoming protobuf data to a JSON format.

## Getting Started

These instructions will help you run the sample v3 websocket client.

### Prerequisites

Before you can run this script, you need to have PHP 7.4 or later installed on your system. If you haven't installed PHP yet, you can download it from the official website:

[Download PHP](https://www.php.net/downloads.php)

To ensure the proper functioning of this project, specific PHP packages are required, which are listed in the included composer.json file. To install these dependencies, you should start by ensuring that you are in the root directory of the project where the composer.json file is located. Then, execute the command

```sh
composer install
```

in your terminal. This command will automatically install all the necessary PHP packages specified in the composer.json file, including `amphp/websocket-client`, and `guzzlehttp/guzzle`. These dependencies will be installed in a new `/vendor` folder, which will be created on the same level as the composer.json file. This streamlined process facilitates a quick and efficient setup of the project environment with all the required dependencies.

### Protocol Buffers (Protobuf) Classes Generation

The generated PHP classes are already checked in under `protobuf/`, so you only need this section if you want to regenerate them from an updated `.proto` file.

Before you can generate the Protobuf classes, you need to download the [proto file](https://assets.upstox.com/feed/market-data-feed/v3/MarketDataFeed.proto) and install the Protocol Buffers compiler (protoc).

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

> **Use a protoc whose version matches the `google/protobuf` runtime pinned in `composer.json` (`^3.25`).**
> A much newer protoc emits code against a newer runtime layout (for example importing
> `Google\Protobuf\RepeatedField` instead of `Google\Protobuf\Internal\RepeatedField`), which will
> not load against the installed runtime.

#### Generate Protobuf classes

Save the downloaded proto file as `MarketDataFeedV3.proto` — the generated `GPBMetadata` class name is derived from the file name. Navigate to the `protobuf/` directory containing it and run:

```
protoc --proto_path=. --php_out=. MarketDataFeedV3.proto
```

This writes one PHP class file per proto message under
`Com/Upstox/Marketdatafeederv3udapi/Rpc/Proto/`, plus the descriptor file `GPBMetadata/MarketDataFeedV3.php`.

If the proto imports a well-known type (such as `google/protobuf/wrappers.proto`) and your protoc
build does not bundle the well-known type definitions, add the include directory that ships with
protoc:

```
protoc --proto_path=. --proto_path=/path/to/protoc/include --php_out=. MarketDataFeedV3.proto
```

Do not commit any generated `GPBMetadata/Google/Protobuf/` output — the `google/protobuf`
runtime classes come from the Composer package, not from this tree.

The generated classes are autoloaded through the PSR-4 mapping, so you can use them directly:

```php
use Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FeedResponse;
```

Sample generated classes are included as part of this repo.

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

The script first fetches the authorized redirect URI from the Upstox server using a valid access token and utilizes this URI to establish a connection with the WebSocket server.

Then the script sends a subscription request for "NSE_INDEX|Nifty Bank" and "NSE_INDEX|Nifty 50". When it receives data from the server, it decodes the protobuf data into a FeedResponse object, converts this object into a dictionary, and then prints the dictionary.

## Support

If you encounter any problems or have any questions about this project, feel free to post it on our [Developer Community](https://community.upstox.com/c/developer-api/15).

## Disclaimer

This is a sample script meant for educational purposes. It may require modifications to work with your specific requirements.

Please replace 'ACCESS_TOKEN' with your actual access token and websocket_client.php with the name of your PHP script. Modify any other details as needed to fit your project.


