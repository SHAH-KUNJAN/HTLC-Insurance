<?
	include("./include/header.php");
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('insurance');
	
	$id=$_REQUEST['id'];
	if(isset($_REQUEST['updatevehical']))
	{
		//$q=$_REQUEST['chk'];
		$no=$_REQUEST['h1'];
		$pol=$_REQUEST['policyno'];
		$reg=$_REQUEST['regno'];
		$eng=$_REQUEST['engineno'];
		$pur=$_REQUEST['purchasevalue'];
		$mak=$_REQUEST['make'];
		$det=$_REQUEST['details'];
		//for($i=0;$i<=count($q);$i++)
		//{
			$q="UPDATE vehical SET 
				policyno = '$pol',
				regno = '$reg',
				engineno = '$eng',
				purchasevalue = '$pur',
				make = '$mak',
				details = '$det'
				WHERE no = $no " ;
					
			mysql_query($q);
			//die($q);
			header("location:adtwo.php");
		//}
	}
	$qry="SELECT * FROM vehical WHERE no='$id' ";
	$rs=mysql_query($qry);
	$rs1=mysql_fetch_array($rs);
?>
<center>
<table border="2" align="center">
<form method="post" action="updatevehical.php">
Enter  policyno:<input type="text" name="policyno" value="<? echo $rs1[1]; ?> "/><br />
Enter  regno:<input type="text" name="regno" value="<? echo $rs1[2]; ?> "/><br />
Enter  engineno:<input type="text" name="engineno" value="<? echo $rs1[3]; ?> "/><br />
Enter  purchasevalue:<input type="text" name="purchasevalue" value="<? echo $rs1[4]; ?> "/><br />
Enter  make:<input type="text" name="make" value="<? echo $rs1[5]; ?> "/><br />
Enter details:<input type="text" name="details" value="<? echo $rs1[6]; ?> "/><br />
<input type="hidden" name="h1" value="<? echo $rs1[0]; ?>" />

<input type="submit" value="update" name="updatevehical">

</form>
</center>
</table>
<?
	include("./include/footer.php");
?>