<?php

namespace App\Providers\GitHub\Client;

interface RequestInterface
{
    public function getUrl(): string;
    public function getMethod(): string;
    public function getOptions(): array;
}
