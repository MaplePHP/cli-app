<?php
/**
 * MaplePHP main boot/index file
 */

use MaplePHP\Core\HttpKernel;

$root = realpath(__DIR__ . "/../");
$autoload = $root . '/vendor/autoload.php';

if (!is_file($autoload)) {
	if (!empty($GLOBALS['_composer_autoload_path'])) {
		$autoload = $GLOBALS['_composer_autoload_path'];
	} else {
		die("Autoloader not found. Run `composer install`.\n");
	}
}

require $autoload;

$app = (new HttpKernel($root))
	->init()
	->boot([
		"dir" => __DIR__
	]);
