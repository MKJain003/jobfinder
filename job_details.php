<?php session_start();


	$link=mysqli_connect("localhost","root","","jobscope") or die("cant connect");
	$q = "select * from jobs where j_id =".$_GET['id'];
	
	$res = mysqli_query($link,$q) or die("Wrong Query");
	
	$row = mysqli_fetch_array($res);
	
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
					
					<h2 class="title"><center><?php echo $row['j_title']; ?></center></a></h2>
					<p class="meta"></p>
					<div class="entry">
						<table width="100%" border="0" class="table table-striped">
							
						<?php
						
						echo '<tr style="text-transform: Capitalize;">
								<td width="30%"><b>Category:</b><br><td>'.$row['j_category'].'</td></tr>
								<tr class="success"><td><b>Company:</b></td><td>'.$row['j_company'].'</td></tr>
								<tr><td><b>Salary:</b></td><td>Upto &#x20b9;'.$row['j_salary'].'</td></tr>
								<tr class="success"><td><b>Working Hours:</b></td><td>Minimum - '.$row['j_hours'].' hrs</td></tr>
								<tr><td><b>Experience:</b></td><td>Atleast '.$row['j_experience'].' years</td></tr>
								<tr class="success"><td><b>Location:</b></td><td>'.$row['j_city'].','.$row['j_state'].'</td></tr>
								<tr><td><b>Description:</b></td><td>'.$row['j_discription'].'</tr>
								
							';
						
						?>
						<br>
						<br>
					
		<?php
	
				if(isset($_SESSION['status']) && $_SESSION['cat']=="employee")
				{
					echo'<tr align="center"><td colspan="2" style="background-color:#F5B7B1;" class="btn btn-default"><a href="process_apply.php?jid='.$row['j_id'].'"> Apply</a></td></tr>';
				}
	
		?>
								
							
					
						</table>
					
					
						
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
