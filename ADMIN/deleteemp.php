<?
	mysql_connect('localhost','root');
	$db=mysql_select_db('insurance');
	if(isset($_REQUEST['id']))
	{
			$id=$_REQUEST['id'];
		$q="DELETE FROM emp WHERE no=$id";
			//die($q);
			mysql_query($q);
			header("location:ademp.php");		
	}
	else
	{
		header("location:ademp.php");
	}
	
?>

