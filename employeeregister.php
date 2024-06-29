<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.php");
?>
 <meta charset="utf-8">
<link rel="stylesheet" href="/examples/css/form-style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function validate() {
	  var name= document.getElementById("usr").value;
	  var password= document.getElementById("pwd").value;
	  var mobile= document.getElementById("mo").value;
	  var address= document.getElementById("add").value;
	  var location= document.getElementById("crl").value;
	  var industry= document.getElementById("ci").value;

	var nameErr = passErr = mobileErr = addressErr = genderErr = locErr = indErr= true;
	//Validate Industry
	if(industry!="")
	  {	
	   	var regex= /^[a-zA-Z\s]+$/;
	   	if(regex.test(industry)===false)
	  	 {
			document.getElementById("lci").style.visibility="visible";
			document.getElementById("ci").focus();
		 }
		 else
		 {
			document.getElementById("lci").style.visibility="hidden";
			indErr= false;
		 } 
	  }
	  //Validate Location
	  if(location != "") 
	  {
        var regex = /^[a-zA-Z0-9\s\,\''\-]*$/;
        if(regex.test(location) === false) {
            document.getElementById("lcrl").style.visibility="visible";
			document.getElementById("crl").focus();
        } else{
			document.getElementById("lcrl").style.visibility="hidden";
            locErr = false;
        }
	  }
		//Validate Mobile Number
	  if(mobile != "") 
	  {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            document.getElementById("lmo").style.visibility="visible";
			document.getElementById("mo").focus();
        } else{
			document.getElementById("lmo").style.visibility="hidden";
            mobileErr = false;
        }
	  }
	   //Validate Address
	   if(address != "") 
	  {
        var regex = /^[a-zA-Z0-9\s\,\''\-]*$/;
        if(regex.test(address) === false) {
            document.getElementById("ladd").style.visibility="visible";
			document.getElementById("add").focus();
        } else{
			document.getElementById("ladd").style.visibility="hidden";
            addressErr = false;
        }
	  }
	 
	  //Validate Password
	  if(password.length<6)
	  {
			document.getElementById("lpwd").style.visibility="visible";
			document.getElementById("pwd").focus();
	  } else{
		document.getElementById("lpwd").style.visibility="hidden";
		  passErr= false;
	  }
		//Validate Name
	  if(name!="")
	  {	
	   	var regex= /^[a-zA-Z\s]+$/;
	   	if(regex.test(name)===false)
	  	 {
			document.getElementById("lusr").style.visibility="visible";
			document.getElementById("usr").focus();
		 }
		 else
		 {
			document.getElementById("lusr").style.visibility="hidden";
			nameErr= false;
		 } 
	  }
	  if((nameErr || passErr || mobileErr || addressErr || locErr || indErr) == true) {
		  return false; 
		} 
	

	};
	
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
					<span class="label label-default">Please fill up the form</span>
					<div class="entry">
						<form action="process_employee_register.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
							<div class="form-group">
								<label for="usr">FULL NAME</label>
								<input type="text" class="form-control" id="usr" name="nm" required="required">
								<label id="lusr"style="color: red; visibility:hidden;">Please enter a valid name</label>
							</div>
							<div class="form-group">
								<label for="pwd">PASSWORD</label>
								<input type="password" class="form-control" id="pwd" name="pwd" required="required">
								<label id="lpwd" style="color:red; visibility:hidden;">Please enter atleast a 6 digits password</label>
							</div>
							<div class="form-group">
								<label for="gen">GENDER</label><br>
								<input type="radio" id="gen" name="gender" value="male">MALE
								<input type="radio" id="gen" name="gender" value="female" required>FEMALE
							</div>
							<div class="form-group">
								<label for="em">EMAIL</label>
								<input type="email" class="form-control" id="em" name="email" required="required">
							</div>
							<div class="form-group">
								<label for="add">ADDRESS</label>
								<textarea name="addr" id="add" class="form-control" required="required"></textarea>
								<label id="ladd" style="color:red; visibility:hidden;">Please enter a valid address</label>
							</div>
							<div class="form-group">
								<label for="mo">MOBILE NUMBER</label>
								<input type="tel" class="form-control" id="mo" name="mobile" required="required">
								<label id="lmo" style="color:red; visibility:hidden;">Please Enter a valid 10 digit number</label>
							</div>
							<div class="form-group">
								<label for="crl">CURRENT LOCATION</label>
								<input type="text" class="form-control" id="crl" name="cl" required="required">
								<label id="lcrl" style="color:red; visibility:hidden;">Please Enter valid location</label>
							</div>
							<div class="form-group">
								<label for="cas">CURRENT MONTHLY SALARY</label>
								<input type="number" class="form-control" id="cas" name="cas" required="required">
							</div>
							<div class="form-group">
								<label for="ci">CURRENT INDUSTRY</label>
								<input type="text" class="form-control" id="ci" name="cindustry" required="required">
								<label id="lci" style="color:red; visibility:hidden;">Please Enter valid industry name</label>
							</div>
							<div class="form-group">
								<label for="ql">QUALIFICATION</label>
								<input type="text" class="form-control" id="ql" name="quali" required="required">
							</div>
							<div class="form-group">
								<label for="pro">PROFILE</label>
								<textarea name="profile" id="pro" class="form-control" required="required"></textarea>
							</div>
							<div class="form-group">
								<label for="ff">RESUME</label>
								<input type="file" name="resume" id="ff" required="required">
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
