<?
	include("./include/header.php");
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('insurance');
	
	$id=$_REQUEST['id'];
	if(isset($_REQUEST['updatehealth']))
	{
		//$q=$_REQUEST['chk'];
		$no=$_REQUEST['h1'];
		$pol=$_REQUEST['policyno'];
		$det=$_REQUEST['details'];
		//for($i=0;$i<=count($q);$i++)
		//{
			$q="UPDATE health SET 
				policyno = '$pol',
				details = '$det'
				WHERE no = $no " ;
					
			mysql_query($q);
			//die($q);
			header("location:adhealth.php");
		//}
	}
	$qry="SELECT * FROM health WHERE no='$id' ";
	$rs=mysql_query($qry);
	$rs1=mysql_fetch_array($rs);
?>
<center>
<table border="2" vspace="100%" align="center">
<form method="post" action="updatehealth.php">
<tr>
<td>Enter  policyno</td>
<td><input type="text" name="policyno" value="<? echo $rs1[1]; ?> "/></td>
</tr>
<tr>
<td>Enter details</td>
<td><input type="text" name="details" value="<? echo $rs1[2]; ?> "/></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="hidden" name="h1" value="<? echo $rs1[0]; ?>" />
<input type="submit" value="UPDATE" name="updatehealth"></td>
</tr>
</form>
</center>
</table>
<?
	include("./include/footer.php");
?>