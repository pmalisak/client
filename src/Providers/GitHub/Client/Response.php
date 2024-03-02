<?php

declare(strict_types=1);

namespace App\Providers\GitHub\Client;

final readonly class Response
{
    public function __construct(
        public int $code,
        public string $payload,
    ) {
    }
}
