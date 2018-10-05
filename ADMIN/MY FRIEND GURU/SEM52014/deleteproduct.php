<?php

 
	session_start();
	

	if(!isset($_SESSION['unm']))
	{
		header('Location:login.php');
	}
	else
	{	
		$id=$_REQUEST['v'];				
		$query="delete from product where pid=$id";
	
		//echo $query;
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("mfg",$con);
		mysql_query($query,$con);
		header('location:product.php');
	}
?>
