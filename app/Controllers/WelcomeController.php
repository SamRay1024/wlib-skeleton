<?php declare(strict_types=1);

namespace App\Controllers;

use wlib\Application\Controllers\FrontController;
use wlib\Application\Sys\Kernel;

class WelcomeController extends FrontController
{
	public function start()
	{
		$this->response->html($this->render('welcome', [
			'app_title' => config('app.name'),

			'kernel_version' => Kernel::VERSION,
			'current_time' => date("d/m/Y H:i:s"),
			'base_uri' => config('app.base_uri'),
			'uid' => $this->getUid(),

			'ip' => $this->request->getIP(),
			'method' => $this->method(),
			'original_method' => $this->request->getOriginalMethod(),
			'uri' => $this->request->getRequestUri(),

			'headers' => $this->request->getHeaders(),

			'args' => $this->args(),
			'params' => $this->param(),
			'data' => $this->data(),
			'files' => files(),
			'session' => (array) session(),
			'cookie' => (array) cookie(),

			'raw_params' => (string) $this->rawParam(),
			'raw_data' => (string) $this->rawData(),
		]));
	}
}