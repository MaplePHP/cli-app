<?php
/**
 * Web router
 *
 * @var RouterDispatcher $router
 */

use App\Controllers\StartController;
use MaplePHP\Core\Router\RouterDispatcher;

$router->get("/", [StartController::class, "index"]);
$router->get("/show", [StartController::class, "show"]);
