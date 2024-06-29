<?php session_start();


	$link=mysqli_connect("localhost","root","","jobscope") or die("cant connect");

		
	$q = "select * from jobs where j_category ='".$_GET['cat']."' and j_active=1 order by j_id desc";
	
	$res = mysqli_query($link,$q) or die("Wrong Query");
	

	
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
  <script>
<?php
 function get_date_ago( $time )
	{
		$time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than a second'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
?>
</script>
  <style>
	div.ho {
		
	}
	div.ho:hover{
		background-color: #E2D3F4;
	}
	div.ho h3{
		color:#2F3C7E;
		font-family: Arial, Helvetica, sans-serif!important;
		text-decoration: underline;
		line-height: 1.2;
	}
	div.ho p{
		color:#2F3C7E; 
		font-size:20px;
		line-height: 1.2;
	}
	</style>
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
					
					<h2 class="title" style="text-transform:Uppercase;"><?php echo $_GET['cat']; ?></h2>
					<p class="meta"></p>
					<div class="entry">		
					<?php
						while($row = mysqli_fetch_array($res))
						{
							$timeago= get_date_ago(strtotime($row['j_date']));
							echo '
							<a href="job_details.php?id='.$row['j_id'].'" style=" text-decoration: none;"><div class="well well-lg ho" style=" text-transform: capitalize;">
							<h3><b>'.$row['j_title'].'</b></h3><p>'.
							  $row['j_company'].'<br>'.$row['j_city'].','.$row['j_state'].'<br>'.
							  'Upto &#x20b9;<b>'.$row['j_salary'].'</b> per month<hr>'.
							  'Apply Now'.'<br>'.$row['j_discription'].'<br>'.
							  $timeago.'</p></div></a>';
						}
						
					?>
					</ul>
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
