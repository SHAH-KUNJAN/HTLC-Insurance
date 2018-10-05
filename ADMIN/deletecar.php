<?
	
	$con=mysql_connect("localhost","root");
	$db=mysql_select_db('insurance');
	if(isset($_REQUEST['id']))
	{
	
				$id=$_REQUEST['id'];
				$q="DELETE FROM car WHERE no=$id";
				mysql_query($q);
				//die($q);
				header("location:adcar.php");
		
	}
	else
	{
		header("location:adcar.php");
	}
	
?>