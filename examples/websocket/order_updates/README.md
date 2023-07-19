# Portfolio Stream Feed WebSocket Client

This PHP project demonstrates how to connect to the Upstox WebSocket API for streaming live order updates. It fetches the order updates and prints them to the console.

## Getting Started

These instructions will help you run the sample websocket client.

### Prerequisites

Before you can run this script, you need to have PHP 7.4 or later installed on your system. If you haven't installed PHP yet, you can download it from the official website:

[Download PHP](https://www.php.net/downloads.php)

You will also need to install several PHP packages:

- `upstox-php-sdk`
- `websocket-client`
- `guzzlehttp/guzzle`

You can install these packages using composer, a package manager for PHP. Open a terminal and enter the following command:

```sh
composer require upstox-php-sdk websocket-client guzzlehttp/guzzle
```

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

The script then enters a loop, where it continually receives order update messages from the server and prints them to the console.

## Support

If you encounter any problems or have any questions about this project, feel free to open an issue in this repository.

## Disclaimer

This is a sample script meant for educational purposes. It may require modifications to work with your specific requirements.

Please replace 'ACCESS_TOKEN' with your actual access token and websocket_client.php with the name of your PHP script. Modify any other details as needed to fit your project.



