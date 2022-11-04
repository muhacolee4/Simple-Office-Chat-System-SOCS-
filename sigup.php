<!Doctype html>
<html>
<head>
    <title>Create New Account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge"> 
	<meta name="viewpoint" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|courgette|pacifico:400,700">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/signup.css">    
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign up</h2>
                <p>WELCOME TO SOCS!
                    fill out this form and start chatting with friends.
                </p>
			</div>
			<div class="form">
				<form>
					<label>Username</label><br>
					<input type="text" name="user_name" class="form-control" placeholder="Example: JOHNNY" autocomplete="off" required><br>
					<label>Password</label><br>
					<input type="password" name="user_pass" class="form-control" placeholder="Password" autocomplete="off" required><br>
                    <label>Email address</label>
                    <input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
                    <label>country</label>
                    <select class="form-control" name="user_country" required>
                        <option disabled="">select a country</option>
                        <option>Nigeria</option>
                        <option>Niger</option>
                        <option>Ghana</option>
                        <option>South Africa</option>
                        <option>Ethopia</option>
                        <option>kenya</option>
</select>
<label>gender</label>
                    <select class="form-control" name="user_gender" required>
                        <option disabled="">select your gender</option>
                        <option>male</option>
                        <option>female</option>
                        <option>others</option>
</select>
<label class="checkbox-inline"><input type="checkbox" required> i accept the <a href="#">terms of use</a>&amp; <a href="#">privacy policy</a></label>
					<button type="submit" name="sign_up" class="btn btn-primary btn-block btn-lg">Submit</button><br>
                    <!--<?php//include("singup_user.php"); ?> -->
					<input class="text-center small" style="color: #674288;">Already have an account?<a href="signin.php">signin here</a>
				</form>
			</div>

		</div>
	</div>
</body>
</html>