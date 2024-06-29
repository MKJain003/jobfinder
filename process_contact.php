<?php
	$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
		
		$nm=$_POST['nm'];
		$email=$_POST['email'];
		$query=$_POST['query'];
		
		$q="insert into contact(cont_fnm,cont_email,cont_query)
		   values ('$nm','$email','$query')";
		   
		mysqli_query($link,$q)or die("wrong query");
		mysqli_close($link);
		header("location:contact.php");

?>