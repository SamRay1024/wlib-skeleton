<?php declare(strict_types=1);

namespace App\Controllers;

use wlib\Application\Controllers\FrontController;
use wlib\Application\Sys\Kernel;

class IndexController extends FrontController
{
	public function start()
	{
		$this->response->html($this->render('index', [
			'app_title' => config('app.name'),
			'kernel_version' => Kernel::VERSION
		]));
	}
}