<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Font Megrim e Roboto -->
	<link href="https://fonts.googleapis.com/css?family=Megrim|Roboto" rel="stylesheet">
	<?php wp_head() ?>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<?php wp_enqueue_script('NomeScript', '/script.js', false, '2.0', false );?>
	
	<title>Tricotix</title>
	
</head>
<body>
	<header class="header">
		<div class="box">
			<div class="header__logo">
				<span>Tricotix</span>
			</div>
			<nav class="header__search">
				<input type="text" placeholder="Cerca.." id="input">
				<i class="fas fa-search" id="search-icon"></i>
			</nav>
		</div>
	</header>
</body>

</html>