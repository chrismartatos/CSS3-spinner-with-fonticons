<!DOCTYPE html>
<html lang="en">
<head>
	
	<!--|  Brought To You By: <///:™  |-->     
	<title>Custom CSS3 Spinner - Ideal for font icons</title>                                                           
	
	<meta charset="UTF-8">	
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--CSS-->
	<link rel="stylesheet" type="text/css" media="all" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/main.css">
	
</head>
<body>

<div id="page">

	<header id="header">
		<a id="logo" href="http://www.chrismartatos.com" target="_blank"><img src="img/logo.png" width="100" alt="logo"></a>
	</header>
	
	<section id="content">
		<h1>Some random content</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p><img src="img/img-1.jpg" alt="image"></p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p><img src="img/img-3.jpg" alt="image"></p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</section>
	
	<footer id="footer"></footer>
	
</div><!--END #page-->


<!--Site preloader-->
<div class="site-preloader">
	
	<div class="example">
		<button onclick="fade_out_preloader()">Hide Preloader</button>
		<a href="http://www.bluenigma.com" target="_blank">Click here for live example</a> 
	</div>
	
	<div class="icon-spinner">
		
	<div class="text">Loading<span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></div>
		<?php 
		/***
		   PHP script for more interactive spinner by spitting out random font-icon class and animation delay
		   Replace this script with all the div's .spinner-animation
		***/
		
		//Shuffle numbers 1 to 9 - Used for animation delay
		$array = range(1, 8);
		
		//Input font-icon classes, for example: fa-search-icon
		$input = array(
			1 => "font-icon-class-1", 
			2 => "font-icon-class-2", 
			3 => "font-icon-class-3", 
			4 => "font-icon-class-4", 
			5 => "font-icon-class-5", 
			6 => "font-icon-class-6", 
			7 => "font-icon-class-7", 
			8 => "font-icon-class-8");
			
		//Shuffle font icons classes
		shuffle($input);
		
		//Shuffle numbers 1 to 8 for animation delay
		shuffle($array);
		
		for ($i=0,$c=count($array); $i<$c; $i++) 
		{
		    echo '<div class="'. $input[$i] .' spinner-animation icon-delay-'. $array[$i] .'">Font-Icon '. $array[$i] .'</div>';
		}
		?>
	</div>
</div>


<!--jQuery-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</body>
</html>