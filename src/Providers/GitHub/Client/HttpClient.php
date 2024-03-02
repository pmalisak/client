<?php

declare(strict_types=1);

namespace App\Providers\GitHub\Client;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpClient implements ClientInterface
{
    public function __construct(
        private HttpClientInterface $client,
    ) {

    }

    public function send(RequestInterface $request): Response
    {
        $response = $this->client->request(
            $request->getMethod(),
            $request->getUrl(),
            $request->getOptions(),
        );

        return new Response($response->getStatusCode(), $response->getContent(false));
    }
}
