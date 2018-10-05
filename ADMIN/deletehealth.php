<?
	mysql_connect('localhost','root');
	$db=mysql_select_db('insurance');
	if(isset($_REQUEST['id']))
	{
			$id=$_REQUEST['id'];
		$q="DELETE FROM health WHERE no=$id";
			//die($q);
			mysql_query($q);
			header("location:adhealth.php");		
	}
	else
	{
		header("location:adhealth.php");
	}
	
?>

