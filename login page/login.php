<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRATION</title>
</head>
<body>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class ="container">
	<div class="row">
		<div class="col-sm-3">
		<div class ="header">
			<h2>login</h2>
		</div>
		<form action="login.php" method="post">

			<div>
				<label for="username">username :</label>
				<input class="form-control" type="text" name="username " required>
			</div>

			<div>
				<label for="password">password :</label>
				<input class= "form-control" type="password" name="password" required>
			</div>
			
            <hr class="pb">
			<button type="submit" name="login_user">Login</button>
            <p>Not a user?</p>
            	<a href ="registers.php"><b>register Here</b></a>
        </form>

</body>
</html>
