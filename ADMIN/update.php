<?
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('login');
	/*if(isset($_REQUEST['update']))
	{
		$q=$_REQUEST['chk'];
		//$no=$_REQUEST['no'];
		$log=$_REQUEST['loginid'];
		$rol=$_REQUEST['role'];
		$pwd=$_REQUEST['password'];
		
		for($i=0;$i<=count($q);$i++)
		{
			$q="UPDATE login SET 
				loginid = '$log',
				password = '$pwd',
				role = '$rol' WHERE no = ".$q[$i];
			//die($q);
			echo $q;
			//mysql_query($q);
		}
	}*/
	$qry="SELECT * FROM login ";
	$rs=mysql_query($qry);
?>

<center>
<table border=2><tr><th></th><th>loginid</th><th>password</th><th>role</th></tr>
879
<?
	$i=0;
	while($row=mysql_fetch_array($rs))
	{
	?>
	
		<tr>
		<td> <a href="update1.php?id=$data[$i]">Update</a> </td>
        <td> <? $row['no']?> </td>
		<td>  <? $row['loginid']?></td>
        <td>  <? $row['password']?> </td>
        <td>  <? $row['role']?> </td>
		</tr>
		<?
			$i++;
	
	}
?>
</table>
</center>
	