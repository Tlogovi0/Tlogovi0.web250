<!DOCTYPE html>
<html>
<head>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="./css/default.css" rel="stylesheet" type="text/css">	
             <title>Tete Logovi Terrible Lion|WEB250|Home</title>
</head>
<body>
<header>
	<h1>Tete Logovi Terrible Lion|WEB250</h1>
	<nav class="navbar">
        
		<a href = "index.html">HTML Home</a>| 
		<a href = "?p=home">PHP Home</a>| 
        <a href = "?p=introduction">Introduction</a>| 
        <a href = "?p=contract">Contract</a>| 
        <a href = "?p=brand">Brand</a>|
		<a href = "?p=fizzbuzzbang">FizzBuzzBang</a>| 
		<a href = "?p=login">Login</a>| 
		<a href = "?p=findme">FindMe</a>| 
		<a href = "?p=forms">Forms</a>
	</nav>
</header>
<main>
	<div class="fab">
	<p id="center">

	<!-- dynamic content goes here -->

<?php
if($_GET) 
{
	//echo("<h1>it found it<h1>");
	$sPage = $_GET["p"];
}
else  
{
	//echo("<h1>it failed it<h1>");
    $sPage = "home";
}


	//echo ("<h1>You picked the page: " . $sPage . "<h1>"); 
	
	$sPage = "contents/" . $sPage . ".php";
	include($sPage);
?>

</main></p></div>
		<footer> 
	
		<nav class="navbar">
 
                <a href="https://github.com/Tlogovi0/Tlogovi0.github.io">Github.io</a>   |
		<a href="https://www.freecodecamp.org/fccc35594b7-aa93-4d23-a1da-68675e421126">freeCodeCamp</a>   |
		<a href=https://www.codecademy.com/profiles/Tlogovi0">Codecademy</a>   |
		<a href="https://www.linkedin.com/learning/?u=76141674">LinkedIn</a>   | 
	      </nav>
</footer>
<p>&copy;2024 Home Paradise. All rights reserved.</p>   
		<p>
		<a href="http://validator.w3.org/check?uri=https://Tlogovi0.github.io/web250.io/index.htm"
		style="text-decoration:none;">
		  <img src="images/html_validation_button.gif" alt="Validate HTML5">
		</a>
		 
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=https://Tlogovi0.github.io/web250.io/index.htm">
		<img src="images/validation_button_css_rectangle.gif " alt="Validate CSS">
		</a>
		</p>
	
</body>
</html>
