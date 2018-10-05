<?
	mysql_connect('localhost','root');
	$db=mysql_select_db('insurance');
	if(isset($_REQUEST['id']))
	{
			$id=$_REQUEST['id'];
		$q="DELETE FROM cus WHERE no=$id";
			//die($q);
			mysql_query($q);
			header("location:adcust.php");		
	}
	else
	{
		header("location:adcust.php");
	}
	
?>

