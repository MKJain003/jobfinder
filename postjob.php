<?php session_start();
?>
<!DOCTYPE html>
<head>
<title>POST JOB</title>
<?php
include("includes/head.php");
?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
var citiesByState = {
Delhi: ["Delhi"],
Maharashtra: ["Mumbai","Pune","Nagpur"],
Rajasthan: ["Jaipur","Udaipur","Jodhpur","Kota","Bikaner"],
Gujarat: ["Ahemdabad","Surat","Rajkot"],
Karnataka: ["Bangalore","Manglore","Hubli"]

}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function validate(){
	var title= document.getElementById('tit').value;
	var woh= document.getElementById('wh').value;
	var salary= document.getElementById('sal').value;

	var titErr=wohErr=salaryErr=true;
	//Validate title
	if(title!='')
	{
		var regex= /^[a-zA-Z\s]+$/;
		if(regex.test(title)===false)
		{
			document.getElementById('ltit').style.visibility="visible";
			document.getElementById('tit').focus();
		}
		else {
			document.getElementById("ltit").style.visibility="hidden";
			titErr= false;
		}
	}
	//validate working hours
	if(woh.valueOf()<12==true) 
	  {
			document.getElementById("lwh").style.visibility="hidden";
            wohErr = false;
        } 
		else{
			document.getElementById("lwh").style.visibility="visible";
			document.getElementById("wh").focus();
		}
		//validate salary
	if(salary!='')
	{
		if(!is_numeric(salary))
		{
			document.getElementById("lsal").style.visibility="visible";
			document.getElementById("sal").focus();
		}
		else {
			document.getElementById("lsal").style.visibility="hidden";
            salaryErr = false;
		}
	}
	if((titErr||wohErr||salaryErr)==true)
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
					
					<h2><font color ="#CD6155"><b>POST JOB</b></font></h2>
					<p class="meta">JOB SPECIFICATION</p>
					<div class="entry">
					<form action="process_postjob.php" method="post" onsubmit="return validate();">
						<div class="form-group">
								<label for="tit">TITLE</label>
								<input type="text" class="form-control" id="tit" name="title" required="required">
								<label id="ltit" style="color:red; visibility:hidden;">Enter your Job Title</label>
						</div>
						<div class="form-group">
							<label for="cat">CATEGORIES</label>
							<select class="form-control" id="cat" name="cat">
							<?php

								$link=mysqli_connect("localhost","root","","jobscope") or die("cant connect");
								$q="select * from categories";
								$res=mysqli_query($link,$q) or die('wrong query');
	
								while($row=mysqli_fetch_array($res))
								{
									echo "<option>".$row['cat_nm'];
								}
							?>
							</select>
						</div>
							<div class="form-group">
								<label for="wh">WORKING HOURS</label>
								<input type="text" class="form-control" id="wh" name="hours" required="required">
								<label id="lwh" style="color:red; visibility:hidden;">Enter numeric values only less than 12</label>
							</div>	
							<div class="form-group">
								<label for="sal">SALARY MONTHLY</label>
								<input type="text" class="form-control" id="sal" name="salary" required="required">
								<label id="lsal" style="color:red; visibility:hidden;">Enter numeric values only</label>
							</div>
							<div class="form-group">
								<label for="exp">EXPERIENCE</label>
								<input type="text" class="form-control" id="exp" name="experience" required="required">
							</div>
							<div class="form-group">
								<label for="des">DESCRIPTION</label>
								<textarea name="disc" id="des" class="form-control" required="required"></textarea>
							</div>
							<div class="form-group">
							<label for="sta">CHOOSE STATE</label>
							<select class="form-control" id="sta" name="sta" onchange="makeSubmenu(this.value)" required>
							<option value="" disabled selected></option>
									<option>Delhi</option>
									<option>Maharashtra</option>
									<option>Rajasthan</option>
									<option>Gujarat</option>
									<option>Karnataka</option>
									
								
							</select>
							</div>	
							<div class="form-group">
								<label for="citySelect">CHOOSE CITY</label>
								<select id="citySelect" name="city">
								<option value="" disabled selected></option>
								<option></option>
								</select>
							</div>
							<div class="form-group">
								<label for="com">COMPANY NAME</label>
								<input type="text" class="form-control" id="com" name="com" required="required">
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
