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
			$q="DELETE FROM policy WHERE no=".$q[$i];
			
			mysql_query($q);
			
		}
	}
	$qry="SELECT * FROM  policy";
	$rs=mysql_query($qry);
	//die($q);
	?>
	
<center>
<form method="post" action="deletepolicy.php">
<table border=2><tr><th></th><th>policyid</th><th>custid</th><th>type</th><th>purdate</th><th>premium</th><th>frequency</th><th>policystdate</th><th>policyeddate</th><th>nextpremiumdt</th><th>approved</th><th>nomineeid</th></tr>


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
        <td> <?=$arr[10]?> </td>
        <td> <?=$arr[11]?> </td>
      
       
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