<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user registration | php</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div>
	<?php
	if(isset($_POST['create'])){
		$firstname =$_POST['firstname'];
		$lastname =$_POST['lastname'];
		$email =$_POST['email'];
		$password =$_POST['password'];

		$sql ="INSERT INTO users (firstname,lastname,email,password)values(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$stmtinsert = $stninsert->execute([$firstname,$lastname,$email,$password]);
		if($result){
			echo 'successfully saved.';
		}else{
			echo 'there were errors while saving the data.';
		}
	}
	?>
</div>
<div class="container">
		  		<div class="row">
				  			<div class ="col-sm-3">
				  		<h1>REGISTRATION</h1>
				  		
				  		
				  		<hr class="mb-4">
				  		<label for="first name"><b>first name</b></label>
				  		<input class="form-control" type= "text" name="firstname" required>
					
				  		<label for="last name"><b>last name</b></label>
				  		<input class="form-control" type="text" name="last name" required>
				  			
				  		<label for="E mail"><b>Email Address</b></label>
				  		<input class="form-control" type="e mail" name="email" required>
				 
				  		
				  		<label for="password"><b>Password</b></label>
				  		<input class="form-control" type="password" name="password" required>
				        </hr class="mb-4">
				        <hr class="mb-1">
				  		<input  class =" btn btn-primary" type="submit" name="create" value="sign up"><a href="login.html"></a>
				  		 </hr class="mb-1">
				  		 
				  

</div>
</div>
				 </div>
	 			</div>
 		 </div>
</div>

