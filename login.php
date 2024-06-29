<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/examples/css/form-style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav"> </div>
    <div class="col-sm-6 text-left" style="padding-top: 10%;">
        <div class="well well-lg" style="background-color:lavender;">
		<img src="images/logo.jpg" height="40%" width="30%" style="padding-bottom:5%"><h2 style="color: #242b5e; display: inline; float: right;">SignIn</h2>
		<?php session_start();
		if(isset($_SESSION['status'])=== false)
		{
           	 echo '<form action="process_login.php" method=POST>
				<div class="form-group">
					<label for="usr">NAME:</label>
					<input type="text" class="form-control" id="usr" name="unm" required="required">
				</div>
				<div class="form-group">
					<label for="pas">PASSWORD:</label>
					<input type="password" class="form-control" id="pas" name="pwd" required="required">
				</div>
				<div class="form-group">
					<label for="typ">TYPE:</label>
					<select class="form-control" id="typ" name="cat">
						<option>employee</option>
						<option>employer</option>
					</select>
				</div>
				<center><input type="submit" class="btn btn-default" style="background-color:#F5B7B1;" value="SignIn"></center>
				<p style="float:right;"><b><a href="employeeregister.php">Register</a></b>
				</form>';
		}
		else {
			header("location:index.php");
		}
		?>
        </div>
    </div>
    <div class="col-sm-3 sidenav"></div>
</div>

</body>
</html>