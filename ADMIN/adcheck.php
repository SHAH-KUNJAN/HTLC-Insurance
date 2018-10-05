<?
	session_start();
	$pwd=$_POST['psd'];
	$id=$_POST['adminid'];
	if((ereg('^[a-z A-Z 0-9]{1,20}$',pwd)) && (ereg('^[admin15]{1,20}$',id)))
	{
		$id=$_POST['adminid'];
		$pwd=$_POST['psd'];
		mysql_connect('localhost','root');
		$db=mysql_select_db('insurance');
		
		$qry="select * from login where loginid='$id' and password='$pwd'";
		$res=mysql_query($qry);
		$n=mysql_num_rows($res);
		//echo $n;
		if($n>0)
		{
			$_SESSION['aduser']=$id;
			header('Location:adhome.php');
		}
		else
		{
			header('Location:adlogin.php');
		}
	}
	else
	{
		header('Location:adlogin.php');
	}
			
	
?>