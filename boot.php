<?php declare(strict_types=1);

/* ==== Composer and kernel app creations =================================== */

$cpr = require_once __DIR__ .'/vendor/autoload.php';

$app = new wlib\Application\Sys\Kernel(__DIR__, [
	'sys.config_dir'	=> 'config',
	'sys.composer'		=> &$cpr,
]);

/* ==== Dependencies registering ============================================ */

/**
 * Place your dependencies in app/Providers/.
 * Injected dependencies are commonly named with "DiProvider" suffix.
 */

// $app->register(App\Providers\MyDiProvider::class);

/* ==== Ok, let'go ! App can be launched :-) ================================ */

$app->run();