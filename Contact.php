<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.php");
?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	function validate() {
	  var name= document.getElementById("usr").value;
		//Validate Name
	  if(name!="")
	  {	
	   	var regex= /^[a-zA-Z\s]+$/;
	   	if(regex.test(name)===false)
	  	 {
			document.getElementById("lusr").style.visibility="visible";
			document.getElementById("usr").focus();
		  	return false;
		 } 
	   	else
	  	 {
			return true;
	  	 }
	  }

 	}
 </script>

</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.php");
		?>
		</div>
		<!-- end #menu -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					<h2><font color ="#CD6155" ><b>REGISTER</b></font></h2>
					<span class="label label-default">please fill this form if you have any query</span>
					<div class="entry">
					<form action="process_contact.php" method="post" onsubmit="return validate()">
						<div class="form-group">
								<label for="usr">FULL NAME</label>
								<input type="text" class="form-control" id="usr" name="nm" required="required">
								<label id="lusr" style="color: red; visibility:hidden;">Please Enter a valid Name</label>
						</div>
						<div class="form-group">
								<label for="em">EMAIL ADDRESS</label>
								<input type="email" class="form-control" id="em" name="email" required="required">
						</div>
						<div class="form-group">
								<label for="q">QUERY</label>
								<textarea name="query" id="q" class="form-control" required="required"></textarea>
						</div>
						<center><input type="submit" class="btn btn-default" style="background-color:#F5B7B1;" value="SUBMIT"></center>
					</form>
						
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
