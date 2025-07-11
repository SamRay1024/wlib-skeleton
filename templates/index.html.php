<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $app_title ?></title>

	<link rel="stylesheet" media="screen" href="/assets/css/w.css">
	<style>
		body {
			font-family: 'Arial', sans-serif;
			background-color: #e8f5e9;
			color: #1b5e20;
			margin: 0;
			padding: 0;
		}

		header {
			padding: 20px;
			text-align: center;
			border-radius: 8px;
			margin: 20px 0;
		}

		h1 {
			color: #2e7d32;
		}

		.small {
			font-size: 1.2em;
			color: #388e3c;
		}

		.big {
			font-size: 2.5em;
			color: #1b5e20;
		}

		section {
			background-color: white;
			padding: 20px;
			border-radius: 10px;
			margin: 20px 0;
		}

		p, ul {
			color: #2e7d32;
		}

		code {
			background-color: #f1f8e9;
			padding: 2px 5px;
			border-radius: 3px;
		}

		.h4 {
			color: #1b5e20;
			font-weight: bold;
		}

		section {
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>

<body>
	<div class="w960p center">
		
		<header class="mal">
			<h1><span class="small">👋 <?= __('Welcome to') ?></span><br /><span class="big">wlib/skeleton</span></h1>
		</header>

		<section class="mal">
			<h2>✨ <?= __('Your new app is ready to get alive !') ?> ✨</h2>

			<p><?= __('You are seeing the default home page, feel free to code your next application !') ?></p>

			<p>✅ <?= __('This page is rendered thanks to :') ?></p>
			
			<ul>
				<li><?= __('one controller') ?>, <code>/app/Controllers/IndexController.php</code>,
				<li><?= __('and one view') ?>, <code>/templates/index.html.php</code>.</li>
			</ul>

			<p><?= _s('Kernel version : %s', $kernel_version) ?></p>

			<h2><?= __('Quick start') ?></h2>

			<p><?= __(
				'In <strong>wlib/skeleton</strong>, there is no route file where to declare them. '
				.'To add a new route, just add a new controller in <code>/app/Controllers</code>.') ?></p>

			<p><?= __('Example : add <code>/app/Controllers/Hello/WorldController.php</code> and you get a new page'
				.' accessible from <code>http://localhost:8000/hello/world</code>. Easy, isn\'t it?') ?></p>

			<p><?= __('See next in <code>IndexController.php</code> to know how to write your controller.') ?></p>

			<p class="h4"><?= __('Happy coding !') ?> 🚀</p>
		</section>
	</div>
</body>

</html>