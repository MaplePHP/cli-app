<?php

declare(strict_types=1);

namespace App\Controllers\Cli;

use Psr\Http\Message\ResponseInterface;
use MaplePHP\Core\Routing\DefaultShellController;

class TestController extends DefaultShellController
{
    public function index(ResponseInterface $response): ResponseInterface
    {
        $this->command->message("Hello from CLI!");
        return $response;
    }
}