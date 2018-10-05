<?
	include("./include/header.php");
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('insurance');
	
	$id=$_REQUEST['id'];
	if(isset($_REQUEST['updatelife']))
	{
		//$q=$_REQUEST['chk'];
		$no=$_REQUEST['h1'];
		$pol=$_REQUEST['policyno'];
		$lco=$_REQUEST['lifecover'];
		$pay=$_REQUEST['premiumpay'];
		$nom=$_REQUEST['nomineeid'];
		$det=$_REQUEST['details'];
		//for($i=0;$i<=count($q);$i++)
		//{
			$q="UPDATE life SET 
				policyno = '$pol',
				lifecover = '$lco',
				premiumpay = '$pay',
				nomineeid = '$nom',
				details = '$det'
				WHERE no = $no " ;
					
			mysql_query($q);
			//die($q);
			header("location:adlife.php");
		//}
	}
	$qry="SELECT * FROM life WHERE no='$id' ";
	$rs=mysql_query($qry);
	$rs1=mysql_fetch_array($rs);
?>
<center>
<table border="2" vspace="70%" align="center">

<form method="post" action="updatelife.php">
<tr>
<td>Enter  policyno</td>
<td><input type="text" name="policyno" value="<? echo $rs1[1]; ?> "/></td>
<tr>
</tr>
<td>Enter  lifecover</td>
<td><input type="text" name="lifecover" value="<? echo $rs1[2]; ?> "/></td>
</tr>
<tr>
<td>Enter  premiumpay</td>
<td><input type="text" name="premiumpay" value="<? echo $rs1[3]; ?> "/></td>
</tr>
<tr>
<td>Enter  nomineeid</td>
<td><input type="text" name="nomineeid" value="<? echo $rs1[4]; ?> "/></td>
</tr>
<tr>
<td>Enter details</td>
<td><input type="text" name="details" value="<? echo $rs1[5]; ?> "/></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="hidden" name="h1" value="<? echo $rs1[0]; ?>" />

<input type="submit" value="UPDATE"  name="updatelife"></td>
</tr>
</form>
</center>
</table>
<?
	include("./include/footer.php");
?>