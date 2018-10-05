<?
		session_start();
		$id=$_POST['userid'];
		$pwd=$_POST['psd'];
		mysql_connect('localhost','root');
		$db=mysql_select_db('insurance');
		$qry="select * from cus where loginid='$id' and password='$pwd'";
		$res=mysql_query($qry);
		$n=mysql_num_rows($res);
		//echo $n;
		if($n>0)
		{
			$_SESSION['user']=$id;
			header('Location:home.php');
		}
		else
		{
			header('Location:login.php');
		}
	
?>