<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assassins Landing</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" type="text/css"/>
		<!--
			cerulean cosmo cyborg darkly flatly journal lumen paper
			readable sandstone simplex slate spacelab superhero
			united yeti
		-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/slate/bootstrap.min.css"/>
	<link rel="stylesheet" href="assassins-landing-home/css/main.css">
</head>
<body>
<?php include_once('partials/nav.php');?>
<div class="container main-container">
	<div class="jumbotron">
		<h1>Welcome to Assassins Landing!</h1>
		<div class="btn btn-primary">Play Game</div>
	</div>
	<div class="col-md-8 main-content">
	</div>
	<div class="col-md-4 sidebar">
		<div class="main-img">
			<img src="https://scontent-iad3-1.xx.fbcdn.net/hphotos-xlf1/v/t1.0-9/12279034_10154350844359606_380697351905458385_n.jpg?oh=a09b9fcfe00fc1ac5e34c6838ec40b27&oe=56DA8F10" alt="">
		</div>
		<br>
		<p>
			I'm Nathan Quinn.
		</p>
		<p>
			I love games. I've been playing games my whole life and have always dreamed about building one.
		</p>
		<p>
			Finally I learned how to program and I put together my first rendition of a large scale game.
		</p>
		<p>
			There are still glitches to be ironed out but then again what product is perfect?
			This game was built solely in Javascript, thus it is a browser only game as of yet. Currently
			I am rebuilding the game in Unity so I can deploy to multiple platforms and it will have more
			of a 3d effect to it.
		</p>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>	
<script src="assassins-landing-home/js/main.js"></script>
</body>
</html>