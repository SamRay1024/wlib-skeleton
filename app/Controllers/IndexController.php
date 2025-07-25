<?php declare(strict_types=1);

namespace App\Controllers;

use wlib\Application\Controllers\Controller;

class IndexController extends Controller
{
	public function start()
	{
		$this->redirect('welcome');
	}
}