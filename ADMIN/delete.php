<?
	mysql_connect('localhost','root');
	
	$db=mysql_select_db('login');
	
	if(isset($_REQUEST['delete']))
	{
		$q=$_REQUEST['chk[]'];
		for($i=0;$i<count($q);$i++)
		{
			$q="DELETE FROM login WHERE loginid=".$q[$i];
			//die($q);
			mysql_query($q);
		}
	}
	$qry="SELECT * FROM login";
	$rs=mysql_query($qry);
?>

<center>
<form method="post" action="delete.php">
<table border=2><tr><th></th><th>loginid</th><th>password</th></tr>

<?
	$i=0;
	while($arr=mysql_fetch_array($rs))
	{
	?>
	
		<tr>
		<td> <input type=checkbox value= <?=$arr[0]?> name="chk[]">
		</td>
		<td> <?=$arr[1]?> </td>
        <td> <?=$arr[2]?> </td>
		</tr>
		<?
			$i++;
	
	}
?>
</table>
<input type="submit" value="delete" name="delete">
</form>
</center>
	