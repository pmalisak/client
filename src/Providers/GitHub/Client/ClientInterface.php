<?php

namespace App\Providers\GitHub\Client;

interface ClientInterface
{
    public function send(RequestInterface $request): Response;
}
