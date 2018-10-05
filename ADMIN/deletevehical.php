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
			$q="DELETE FROM vehical WHERE no=".$q[$i];
			
			mysql_query($q);
		}
	}
	$qry="SELECT * FROM  vehical";
	$rs=mysql_query($qry);
	//die($q);
	?>
	
<center>
<form method="post" action="deletevehical.php">
<table border=2><tr> <th></th> <th></th> <th></th> <th>policyno</th><th>regno</th><th>engineno</th><th>purchasevalue</th><th>make</th><th>details</th></tr>


<?
	$i=0;
	while($arr=mysql_fetch_array($rs))
	{
	?>
	
		<tr>
        <td> <a href='update4.php?id=$row[0]'>UPDATE</a> </td>
		<td> <a href='inserttwo.php?id=$row[0]'>INSERT</a> </td>
		<td> <input type=checkbox value= <?=$arr[0]?> name="chk[]"></td>

		<td> <?=$arr[3]?> </td>
        <td> <?=$arr[4]?> </td>
        <td> <?=$arr[5]?> </td>
		<td> <?=$arr[6]?> </td>
        <td> <?=$arr[7]?> </td>
        <td> <?=$arr[8]?> </td>
        <td> <?=$arr[9]?> </td>
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