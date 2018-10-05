<?php 
	session_start();
	if(!isset($_SESSION['unm']))
	{
		header('Location:login.php');
	}
	else
	{	
		$pnm=$_POST['txtpnm'];
		$cid=$_POST['selcomp'];
		$chk=$_POST['chk'];
		$pid=$_POST['h'];
				
		//change name of file at both place
	if($chk)
	{
		$path="./product/".basename($_FILES['fimg']['name']);
		//$path="./product/xyz.jpg";
		move_uploaded_file($_FILES['fimg']['tmp_name'],$path);	
		$query="update product set pnm='$pnm',cid=$cid,pimg='$path'	where pid=$pid";
	}
	else
	{
		$query="update product set pnm='$pnm',cid=$cid	where pid=$pid";
	}
		//echo $query;
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("mfg",$con);
		mysql_query($query,$con);
		header('location:product.php');
	}
?>