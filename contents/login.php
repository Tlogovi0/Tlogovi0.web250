<!DOCTYPE html>
<html>
<head>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="./css/default.css" rel="stylesheet" type="text/css">	
             <title>Tete Logovi the real Eagle | WEB250|Home</title>
</head>
<body>
	<header>
		<h1>Tete Logovi the real Eagle| WEB250</h1>

<nav class="navbar">

	<a href = "?p=index.php">Home</a>   |
	<a href = "?p=introduction.php">Introduction</a>   |
	<a href = "?p=contract.php">Contract</a>   |
	<a href = "?p=brand.php">Brand</a>   |
	<a href = "?p=form.php">Form</a>   |
	<a href = "?p=login.php">Login</a>  |  
	

</nav>
		<h1><h1> Login</h1></h1>
	</header>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="button"] {
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #45a049;
        }
    </style>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm" action="#" method="post">
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
        <p style="text-align: center;">or</p>
        <button onclick="showRegistrationForm()">Register</button>
        <form id="registrationForm" action="#" method="post" style="display: none;">
            <input type="text" id="firstName" name="firstName" placeholder="First Name" required><br>
            <input type="text" id="lastName" name="lastName" placeholder="Last Name" required><br>
            <input type="email" id="regEmail" name="regEmail" placeholder="Email" required><br>
            <input type="password" id="regPassword" name="regPassword" placeholder="Password" required><br>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="submit" value="Register">
        </form>
    </div>

    <script>
        function showRegistrationForm() {
            var loginForm = document.getElementById('loginForm');
            var registrationForm = document.getElementById('registrationForm');
            var registerButton = document.querySelector('button');

            if (registrationForm.style.display === "none") {
                registrationForm.style.display = "block";
                loginForm.style.display = "none";
                registerButton.textContent = "Back to Login";
            } else {
                registrationForm.style.display = "none";
                loginForm.style.display = "block";
                registerButton.textContent = "Register";
            }
        }
    </script>
	<footer> 
	
		<nav class="navbar">
 
                <a href="https://github.com/Tlogovi0/Tlogovi0.github.io">Github.io</a>   |
		<a href="https://www.freecodecamp.org/fccc35594b7-aa93-4d23-a1da-68675e421126">freeCodeCamp</a>   |
		<a href=https://www.codecademy.com/profiles/Tlogovi0">Codecademy</a>   |
		<a href="https://pathfinder.w3schools.com/profile">W3schools</a>   |
		<a href="https://www.linkedin.com/learning/?u=76141674">LinkedIn</a>   |      
</footer>

<p>&copy; 2024 Home Paradise. All rights reserved.</p>   
		<p>
		<a href="http://validator.w3.org/check?uri=referer" style = "text-decoration: none">
		  <img src="images/html_validation_button.gif" alt="Validate HTML" />
		</a>
		 
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=https://tlogovi0.github.io/web250.io/index.html">
		 <img src="images/validation_button_css_rectangle_blue.gif" alt="Validate CSS" >

		</a>
		</p>
	
</body>
</html>
