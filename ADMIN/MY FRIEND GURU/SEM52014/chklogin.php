<?php 
	session_start();
	$unm=$_POST['txtunm'];
	$psw=$_POST['txtpsw'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("mfg",$con);
	$query="select * from register where unm='$unm' and psw='$psw'";
	//echo $query;
	$res=mysql_query($query,$con);
	//echo mysql_num_rows($res);
	if(mysql_num_rows($res)<=0)
	{
		header('Location:login.php');
	}
	else
	{	
		$_SESSION['unm']=$unm;
		header('Location:product.php');
	}
?>
