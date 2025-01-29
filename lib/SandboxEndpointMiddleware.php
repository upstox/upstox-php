<?php

namespace Upstox\Client;

use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Exception\RequestException;

class SandboxEndpointMiddleware
{
    private $sandEndpoints;

    public function __construct()
    {
        $this->sandEndpoints = [
            "/v2/order/place" => true,
            "/v2/order/modify" => true,
            "/v2/order/cancel" => true,
            "/v2/order/multi/place" => true,
            "/v3/order/place" => true,
            "/v3/order/modify" => true,
            "/v3/order/cancel" => true,
        ];
    }

    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            $uri = $request->getUri()->getPath();
            // Check if the endpoint is blocked
            if (!isset($this->sandEndpoints[$uri])) {
                // Throw an exception or handle the blocked request as needed
                return new \GuzzleHttp\Promise\RejectedPromise(
                    new RequestException("This API is not available in sandbox mode.", $request)
                );
            }

            // Proceed with the request
            return $handler($request, $options);
        };
    }
}
