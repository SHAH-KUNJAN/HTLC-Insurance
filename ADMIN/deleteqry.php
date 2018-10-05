<?
	$con=mysql_connect("localhost","root");
	$db=mysql_select_db('insurance');
	if(isset($_REQUEST['id']))
	{
	
				$id=$_REQUEST['id'];
				$q="DELETE FROM query WHERE queryid=$id";
				mysql_query($q);
				//die($q);
				header("location:replyad.php");
		
	}
	else
	{
		header("location:replyad.php");
	}
	
?>