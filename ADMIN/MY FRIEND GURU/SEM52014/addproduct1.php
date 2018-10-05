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
		//change name of file at both place
		$path="./product/".basename($_FILES['fimg']['name']);
		move_uploaded_file($_FILES['fimg']['tmp_name'],$path);	
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("mfg",$con);
		$query="insert into product(pnm,cid,pimg) values('$pnm',$cid,'$path')";
		$res=mysql_query($query,$con);
		header('location:product.php');
	}
?>