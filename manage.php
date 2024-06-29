<?php session_start();

	if(! isset($_SESSION['status']))
	{
		header("location:index.php");
	}
		$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
		
		$q="select * from jobs where j_owner_name='".$_SESSION['unm']."'";
		
		$res=mysqli_query($link,$q) or die ("wrong query");
		
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
					
					<h2><font color ="#CD6155" ><b>MANAGE JOBS</b></font></h2>
					<div class="entry">
					<center><b> YOUR JOBS <b></center>
					<table border="0" width="100%" style="font-size:14px;">
				
					<tr>
						<td width="20%"><b>Number</b></td>
						<td width="50%"><b>Title</b></td>
						<td width="20%"><b>View Applicant</b></td>
						<td width="10%"><b>Delete</b></td>
						
					</tr>
					
				<tr>
					<td colspan="4"><hr></td></tr>
				
				<?php
				$count=1;
					while($row=mysqli_fetch_array($res))
					{
						echo '<tr> <td width="10%">'.$count.'
								<td style="text-transform:Capitalize;" width="50%"><a href="job_details.php?id='.$row['j_id'].'">'.$row['j_title'].'
								<td width="10%" align="center"><a href="show.php?id='.$row['j_id'].'&nm='.$row['j_title'].'">View</a>
								<td><a href="process_del_job.php?id='.$row['j_id'].'"><img src="images/delete.png"></a></tr>';
						
						$count++;
					}
					
				?>
					
					</tr>
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
