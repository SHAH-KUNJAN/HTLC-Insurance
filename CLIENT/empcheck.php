<?
		session_start();
		$id=$_POST['empid'];
		$pwd=$_POST['psd'];
		mysql_connect('localhost','root');
		$db=mysql_select_db('insurance');
		$qry="select * from emp where loginid='$id' and password='$pwd'";
		$res=mysql_query($qry);
		$n=mysql_num_rows($res);
		//echo $n;
		if($n>0)
		{
			$_SESSION['emp']=$id;
			header('Location:home.php');
		}
		else
		{
			header('Location:emplogin.php');
		}
	
?>