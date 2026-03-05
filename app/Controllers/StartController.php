<?php

namespace App\Controllers;

use MaplePHP\Core\Routing\DefaultController;
use Psr\Http\Message\ResponseInterface;

class StartController extends DefaultController
{
    public function index(ResponseInterface $response)
    {
        $response->getBody()->write("Hello World!");
        return $response;
    }

	public function show(ResponseInterface $response)
	{
		$response->getBody()->write("Hello World 2!");
		return $response;
	}
}
