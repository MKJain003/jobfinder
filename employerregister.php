<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Flowerily 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090906

-->

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
	var pass=document.getElementById("pwd").value;
	var cn=document.getElementById("cnm").value;
	var cadd=document.getElementById("cadd").value;
	var phone=document.getElementById("phn").value;

	var nameErr=passErr=cnErr=caddErr=phoneErr=true;
	//Validate Name
	if(name!='')
	{
		var regex= /^[a-zA-Z\s]+$/;
		if(regex.test(name)===false)
		{
			document.getElementById('lusr').style.visibility="visible";
			document.getElementById('usr').focus();
		}
		else {
			document.getElementById("lusr").style.visibility="hidden";
			nameErr= false;
		}
	}
	//Validate Password
	if(pass.length<6)
	{
		document.getElementById("lpwd").style.visibility="visible";
			document.getElementById("pwd").focus();
	} else{
		document.getElementById("lpwd").style.visibility="hidden";
		  passErr= false;
	}
	//Validate Company Name
	if(cn!='')
	{
		var regex= /^[a-zA-Z\s]+$/;
		if(regex.test(cn)===false)
		{
			document.getElementById('lcnm').style.visibility="visible";
			document.getElementById('cnm').focus();
		}
		else {
			document.getElementById("lcnm").style.visibility="hidden";
			cnErr= false;
		}
	}
	//Validate Company Address
	if(cadd!="")
	{
		var regex= /^[a-zA-Z0-9\s\,\''\-]*$/;
		if(regex.test(cadd) === false) {
            document.getElementById("lcadd").style.visibility="visible";
			document.getElementById("cadd").focus();
        } else{
			document.getElementById("lcadd").style.visibility="hidden";
            addressErr = false;
        }
	}
	//Validate Phone Number
	if(phone != "") 
	  {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(phone) === false) {
            document.getElementById("lphn").style.visibility="visible";
			document.getElementById("phn").focus();
        } else{
			document.getElementById("lphn").style.visibility="hidden";
            phoneErr = false;
        }
	  }
	if((passErr||nameErr||cnErr||caddErr||phoneErr)==true)
	{
		return false;
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
					<p class="meta">Please fill up the form</p>
					<div class="entry">
						<form action="process_employer_register.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
							<div class="form-group">
								<label for="usr">FULL NAME</label>
								<input type="text" class="form-control" id="usr" name="nm" required="required">
								<label id="lusr" style="color: red; visibility: hidden;">Please enter a valid name</label>
							</div>
							<div class="form-group">
								<label for="pwd">PASSWORD</label>
								<input type="password" class="form-control" id="pwd" name="pwd" required="required">
								<label id="lpwd" style="color:red; visibility:hidden;">Please enter atleast 6 digit password</label>
							</div>
							<div class="form-group">
								<label for="cnm">COMPANY NAME</label>
								<input type="text" class="form-control" id="cnm" name="cnm" required="required">
								<label id="lcnm" style="color: red; visibility: hidden;">Please enter a valid company name</label>
							</div>
							<div class="form-group">
								<label for="cadd">COMPANY ADDRESS</label>
								<textarea name="addr" id="cadd" class="form-control" required="required"></textarea>
								<label id="lcadd" style="color:red; visibility:hidden;">Please enter a valid company address</label>
							</div>
							<div class="form-group">
								<label for="phn">MOBILE NUMBER</label>
								<input type="tel" class="form-control" id="phn" name="ph" required="required">
								<label id="lphn" style="color:red; visibility:hidden;">Please enter a valid 10 digit number</label>
							</div>
							<div class="form-group">
								<label for="em">EMAIL</label>
								<input type="email" class="form-control" id="em" name="email" required="required">
							</div>
							<div class="form-group">
								<label for="pro">COMPANY PROFILE</label>
								<textarea name="profile" id="pro" class="form-control" required="required"></textarea>
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
