<?php

	
	
	if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='.DOC'))
	{
		echo "wrong file type";
	}
	
	
	
	
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['gender'])|| empty($_POST['email'])|| empty($_POST['addr'])|| empty($_POST['mobile'])|| empty($_POST['cl'])|| empty($_POST['cas'])||
	empty($_POST['cindustry'])||empty($_POST['quali'])|| empty($_POST['profile']) || empty($_POST['pwd'] ))
	{
		$msg[]="one of your field is empty";
	}
	
	if($_FILES['resume']['error']>0)
	{
		$msg[] = "error uploading file";
	}
	
	if(file_exists("upload/".$_FILES['resume']['name']))
	{
		$msg[] = "this file is already uploaded.";
	}

	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
		foreach($msg as $k)
		{
			echo "<li>".$k;
		}
	}
	else
	{
		$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
		
		
		$nm=$_POST['nm'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];
		$mobile=$_POST['mobile'];
		$cl=$_POST['cl'];
		$cas=$_POST['cas'];
		$cindustry=$_POST['cindustry'];
		$quali=$_POST['quali'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];
		if(move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']))
		{
			$fi=$_FILES['resume']['name'];
		}
		
		$q="insert into employees(ee_resume,ee_pwd,ee_fnm,ee_gender,ee_email,ee_add,ee_mobileno,
		     ee_current_location,ee_monthlysalary,ee_current_industry,ee_qualification,ee_profile)
	    values ('$fi','$pwd','$nm','$gender','$email','$addr','$mobile','$cl','$cas','$cindustry','$quali','$profile')";
		   
		mysqli_query($link,$q)or die("wrong query");
		mysqli_close($link);
		header("location:employeeregister.php");
	}
?>