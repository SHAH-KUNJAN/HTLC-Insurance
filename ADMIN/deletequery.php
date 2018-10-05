<?
	include("./include/header.php");
	
	$con=mysql_connect("localhost","root");
	$db=mysql_select_db('insurance');
	
	
	//echo $q;
	if(isset($_REQUEST['delete']))
	{
		$q=$_REQUEST['chk'];
		for($i=0;$i<count($q);$i++)
		{
			$q="DELETE FROM query WHERE no=".$q[$i];
			
			mysql_query($q);
		}
	}
	$qry="SELECT * FROM  query";
	$rs=mysql_query($qry);
	//die($q);
	?>
	
<center>
<form method="post" action="deletequery.php">
<table border=2><tr><th></th><th>queryid</th><th>query</th><th>postedby</th></tr>


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
        <td> <?=$arr[3]?> </td>
		<td> <?=$arr[4]?> </td>
       
		</tr>
		<?
			$i++;
	
	}
?>
</table>
<input type="submit" value="delete" name="delete">
</form>
</center>
<?
	include("./include/footer.php");

?>