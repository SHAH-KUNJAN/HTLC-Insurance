<?
	include("./include/header.php");
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('insurance');
	
	$id=$_REQUEST['id'];
	if(isset($_REQUEST['updatecar']))
	{
		//$q=$_REQUEST['chk'];
		$no=$_REQUEST['h1'];
		$pol=$_REQUEST['policyno'];
		$reg=$_REQUEST['regno'];
		$eng=$_REQUEST['engineno'];
		$pur=$_REQUEST['purchasevalue'];
		$mak=$_REQUEST['make'];
		$det=$_REQUEST['detail'];
		//for($i=0;$i<=count($q);$i++)
		//{
			$q="UPDATE car SET 
				policyno='$pol',
				regno='$reg',
				engineno='$eng',
				purchasevalue='$pur',
				make='$mak',
				detail='$det'
				WHERE no=$no " ;
					
			mysql_query($q);
			//die($q);
			header("location:adcar.php");
		//}
	}
	$qry="SELECT * FROM car WHERE no='$id' ";
	$rs=mysql_query($qry);
	$rs1=mysql_fetch_array($rs);
?>
<center>
<table align="center"  vspace="70%" border="2">
<form method="post" action="updatecar.php">
<tr>
<td>Enter  policyno</td>
<td><input type="text" name="policyno" value="<? echo $rs1[1]; ?> "/></td>
</tr>
<tr>
<td>Enter  regno</td>
<td><input type="text" name="regno" value="<? echo $rs1[2]; ?> "/></td>
</tr>
<tr>
<td>Enter  engineno</td>
<td><input type="text" name="engineno" value="<? echo $rs1[3]; ?> "/></td>
</tr>
<tr>
<td>Enter  purchasevalue</td>
<td><input type="text" name="purchasevalue" value="<? echo $rs1[4]; ?> "/></td>
</tr>
<tr>
<td>Enter  make</td>
<td><input type="text" name="make" value="<? echo $rs1[5]; ?> "/></td>
</tr>
<tr>
<td>Enter details</td>
<td><input type="text" name="detail" value="<? echo $rs1[6]; ?> "/><td>
</td>
<tr>
<td colspan="2" align="center"><input type="hidden" name="h1" value="<? echo $rs1[0]; ?>" />

<input type="submit" value="UPDATE" name="updatecar">
</td>
</tr>
</form>
</center>
</table>
<?
	include("./include/footer.php");
?>