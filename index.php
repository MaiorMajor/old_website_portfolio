<!DOCTYPE html>
<html lang="pt" class="index">

<head>
	<title>Studio Hall</title>
	<meta charset="UTF-8">
	<meta name="author" content="Jorge Marques">
	<link rel="icon" href="images/favicons/hall_r0r_icon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="index" itemscope itemtype="http://schema.org/WebPage">
	
	<header class="index">
		<h1 class="title">JORGE'S STUDIO HALL</h1>
		<section class="intro-box">
			<h3>Bem vindx ao meu <strong><em>estúdio</em></strong>.</h3>
			<p>Sou um artista multidisciplinar cujo trabalho se divide em duas grandes vertentes: a
				<strong>visual</strong> e a <strong>musical</strong>. Escolhe a vertente que gostarias de ver.</p>
		</section>
		
		<?php include('templates/Menu Nav Global/ASIDE-index.php'); ?>

	</header>
	<main itemprop="mainContentOfPage" class="index">
		<section class="container" itemscope itemtype="http://schema.org/CreativeWork">
			<figure class="content">
				<a href="artes/home.php" target="_blank" class="image-container left-image">
					<img src="images/pintura.jpg" alt="Pintura" class="image">
					<p>Aqui, podes descobrir o meu trabalho como artista visual.</p>
				</a>
				<h2 itemprop="name">JORGE MARQUES</h2>
			</figure>
			<figure class="content">
				<a href="musica/home.php" target="_blank" class="image-container right-image">
					<img src="images/maiormajor.jpg" alt="Musica" class="image">
					<p>Aqui, podes descobrir o meu trabalho como rapper.</p>
				</a>
				<h2 itemprop="name">MAIOR MAJOR</h2>
			</figure>
		</section>
	</main>
	<footer class="index-footer">
		<p>&copy; 2023 <em>Designed by</em> Jorge Marques Studio. All rights reserved.
	</footer>
	<div id="smoke-container"></div>
	<canvas id="canvas"></canvas>
	<script src="script.js"></script>
</body>


</html>