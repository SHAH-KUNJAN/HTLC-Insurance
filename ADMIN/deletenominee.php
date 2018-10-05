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
			$q="DELETE FROM nominee WHERE no=".$q[$i];
			
			mysql_query($q);
		}
	}
	$qry="SELECT * FROM  nominee";
	$rs=mysql_query($qry);
	//die($q);
	?>
	
<center>
<form method="post" action="deletenominee.php">
<table border=2><tr><th></th><th>nomineeid</th><th>name</th><th>emailid</th><th>dob</th><th>address</th><th>phno</th><th>relation</th><th>gender</th><th>city</th></tr>


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