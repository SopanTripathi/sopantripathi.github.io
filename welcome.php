<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vivek Tripathi</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/homestyle.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>


	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top nav navbar-nav">
		<a href="#">HOME</a>| <a href="#wallpaper">WALLPAPER</a>| <a
			href="#shortstory">SHORT STORY</a>| <a href="#contact">CONTACT</a>
	</nav>
	<!-- End Navigation -->



	<!-- SECTION 1 -->
	<div id="home">
		<section>	
			<?php
			require_once ($_SERVER ['DOCUMENT_ROOT'] . '/PHP5Bible/header.inc');
			?>
		</section>
	</div>


	<!-- SECTION 2 -->
	<div id="wallpaper">
		<section>
			<?php
			require_once ($_SERVER ['DOCUMENT_ROOT'] . '/PHP5Bible/wallpaper.inc');
			?>
		</section>
	</div>



	<!-- SECTION 3 -->
	<div id="shortstory">
		<section>
			<?php
			require_once ($_SERVER ['DOCUMENT_ROOT'] . '/PHP5Bible/shortstories.inc');
			?>
		</section>
	</div>



	<!-- SECTION 4 -->
	<div id="contact">
		<section>
			<?php
			require_once ($_SERVER ['DOCUMENT_ROOT'] . '/PHP5Bible/contact.inc');
			?>
		</section>
	</div>

</body>
</html>

