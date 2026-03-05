<?php

use MaplePHP\Core\Middlewares\HttpStatusError;
use MaplePHP\Emitron\Middlewares\ContentLengthMiddleware;
use MaplePHP\Emitron\Middlewares\GzipMiddleware;

return [
	"middleware" => [
		"global" => [
			HttpStatusError::class,
			//ContentLengthMiddleware::class,
			//GzipMiddleware::class,
		]
	]
];