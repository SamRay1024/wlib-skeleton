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

		caption
		{
			padding: 6px;
			background-color: #5bb15f;
			color: white;
			font-style: normal;
			text-align: left;
		}
		caption code {
			float: right;
			font-size: .8em;
		}
		td, th {
			padding: 0.2em .5em;
			overflow-x: auto;
			word-wrap: break-word;
		}
		td {
			max-width: 639px;
		}
		td em {
			color: #7f8c8d;
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
				<li><?= __('one controller') ?>, <code>/app/Controllers/WelcomeController.php</code>,
				<li><?= __('and one view') ?>, <code>/templates/welcome.html.php</code>.</li>
			</ul>

			<h2><?= __('Quick start') ?></h2>

			<p><?= __(
				'In <strong>wlib/skeleton</strong>, there is no route file where to declare them. '
				.'To add a new route, just add a new controller in <code>/app/Controllers</code>.') ?></p>

			<p><?= __('Example : add <code>/app/Controllers/Hello/WorldController.php</code> and you get a new page'
				.' accessible from <code>http://localhost:8000/hello/world</code>. Easy, isn\'t it?') ?></p>

			<p><?= __('See next in <code>IndexController.php</code> to know how to write your controller.') ?></p>

			<p class="h4"><?= __('Happy coding !') ?> 🚀</p>

			<hr size="1" style="border-color:#e8f5e9">

			<h2>⚙️ <?= __('Technical info') ?></h2>

			<table class="w100 wtable-bordered">
				<caption><?= __('General information') ?></caption>
				<tr><th class="w200p"><?= __('Time') ?></th><td><?= $current_time ?></td></tr>
				<tr><th><?= __('Kernel version') ?></th><td><?= $kernel_version ?></td></tr>
				<tr><th><?= __('Base URI') ?></th><td><?= $base_uri ?></td></tr>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Request') ?></caption>
				<tr><th class="w200p"><?= __('IP') ?></th><td><?= $ip ?></td></tr>
				<tr><th><?= __('Method') ?></th><td><?= $method ?></td></tr>
				<tr><th><?= __('Original method') ?></th><td><?= $original_method ?></td></tr>
				<tr><th><?= __('URI') ?></th><td><?= $uri ?></td></tr>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Headers') ?></caption>
				<?php if (count($headers)): foreach ($headers as $key => $value) : ?>
				<tr><th class="w200p"><?= $key ?></th><td><?= $value ?></td></tr>
				<?php endforeach; else: ?>
				<tr><td colspan="2"><em><?= __('Empty') ?></em></td></tr>
				<?php endif; ?>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Arguments') ?></caption>
				<?php if (count($args)): foreach ($args as $key => $value) : ?>
				<tr><th class="w200p"><?= $key ?></th><td><?= $value ?></td></tr>
				<?php endforeach; else: ?>
				<tr><td colspan="2"><em><?= __('Empty') ?></em></td></tr>
				<?php endif; ?>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Parameters') ?> <code>$_GET</code></caption>
				<?php if (count($params)): foreach ($params as $key => $value) : ?>
				<tr><th class="w200p"><?= $key ?></th><td><?= $value ?></td></tr>
				<?php endforeach; else: ?>
				<tr><td colspan="2"><em><?= __('Empty') ?></em></td></tr>
				<?php endif; ?>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Data') ?> <code>$_POST</code></caption>
				<?php if (count($data)): foreach ($data as $key => $value) : ?>
				<tr><th class="w200p"><?= $key ?></th><td><?= $value ?></td></tr>
				<?php endforeach; else: ?>
				<tr><td colspan="2"><em><?= __('Empty') ?></em></td></tr>
				<?php endif; ?>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Files') ?> <code>$_FILE</code></caption>
				<?php if (count($files)): foreach ($files as $key => $value) : ?>
				<tr><th class="w200p"><?= $key ?></th><td><?= $value ?></td></tr>
				<?php endforeach; else: ?>
				<tr><td colspan="2"><em><?= __('Empty') ?></em></td></tr>
				<?php endif; ?>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Session') ?> <code>$_SESSION</code></caption>
				<?php if (count($session)): foreach ($session as $key => $value) : ?>
				<tr><th class="w200p"><?= $key ?></th><td><?= $value ?></td></tr>
				<?php endforeach; else: ?>
				<tr><td colspan="2"><em><?= __('Empty') ?></em></td></tr>
				<?php endif; ?>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Cookies') ?> <code>$_COOKIE</code></caption>
				<?php if (count($cookie)): foreach ($cookie as $key => $value) : ?>
				<tr><th class="w200p"><?= $key ?></th><td><?= $value ?></td></tr>
				<?php endforeach; else: ?>
				<tr><td colspan="2"><em><?= __('Empty') ?></em></td></tr>
				<?php endif; ?>
			</table>
			
			<table class="w100 wtable-bordered">
				<caption><?= __('Raw parameters') ?> <code>$_GET</code></caption>
				<tr><th class="w200p"><?= __('Value') ?></th><td><?= $raw_params ?: '<em>'. __('Empty') .'</em>' ?></td></tr>
			</table>

			<table class="w100 wtable-bordered">
				<caption><?= __('Raw data') ?> <code>$_POST</code></caption>
				<tr><th class="w200p"><?= __('Value') ?></th><td><?= $raw_data ?: '<em>'. __('Empty') .'</em>' ?></td></tr>
			</table>
		</section>
	</div>
</body>

</html>