<?php

namespace App\Controllers\Cli;

use MaplePHP\Core\Routing\DefaultShellController;
use Psr\Http\Message\ResponseInterface;

class TestController extends DefaultShellController
{
    public function index(ResponseInterface $response): ResponseInterface
    {
        $this->command->message("Hello from CLI!");
        return $response;
    }
}