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
			<h2>register</h2>
		</div>
		<form action="registers.php" method="post">

			<div>
				<label for="username">username :</label>
				<input class="form-control" type="text" name="username " required>
			</div>

			<div>
				<label for="Email">Email Adress :</label>
				<input class= "form-control" type="Email" name="Email" required>
			</div>

			<div>
				<label for="password">password :</label>
				<input class="form-control" type="text" name="password 1"required>
			</div>

			<div>
				<label for="password">conform password  :</label>
				<input class="form-control" type="text" name="password 2"required>
			</div>
            <hr class="pb">
			<button type="submit">submit</button>
<hr class="pb">
            <p>Already user?</p>
            <a href ="login.php"><b>Log in</b></a>
        </form>

</body>
</html>
