<?php
/**
 * Shell router
 *
 * @var RouterDispatcher $router
 */

use App\Controllers\Cli\TestController;
use MaplePHP\Core\Router\RouterDispatcher;

$router->cli("/run", [TestController::class, "index"]);

