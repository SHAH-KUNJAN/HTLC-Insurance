<?
	include("./include/header.php");
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('insurance');
	
	$id=$_REQUEST['id'];
	if(isset($_REQUEST['updatepolicy']))
	{
		//$q=$_REQUEST['chk'];
		$no=$_REQUEST['h1'];
		$pol=$_REQUEST['policyno'];
		$pid=$_REQUEST['policyid'];
		$cid=$_REQUEST['custid'];
		$typ=$_REQUEST['type'];
		$pdt=$_REQUEST['purdate'];
		$prm=$_REQUEST['premium'];
		$fre=$_REQUEST['frequency'];
		$stdt=$_REQUEST['policystdate'];
		$eddt=$_REQUEST['policyeddate'];
		$nxtpre=$_REQUEST['nextpremiumdt'];
		$app=$_REQUEST['approved'];
		$nom=$_REQUEST['nomineeid'];
		//for($i=0;$i<=count($q);$i++)
		//{
			$q="UPDATE policy SET 
				policyno = '$pol',
				policyid = '$pid',
				custid = '$cid',
				type = '$typ',
				purdate = '$pdt',
				premium = '$prm',
				frequency = '$fre',
				policystdate = '$stdt',
				policyeddate = '$eddt',
				nextpremiumdt = 'nxtpre',
				approved = '$app',
				nomineeid = '$nom'
				WHERE no = $no " ;
					
			mysql_query($q);
			//die($q);
			header("location:adpolicy.php");
		//}
	}
	$qry="SELECT * FROM policy WHERE no='$id' ";
	$rs=mysql_query($qry);
	$rs1=mysql_fetch_array($rs);
?>
<center>
<table border="2" vspace="100%" align="center">
<form method="post" action="updatepolicy.php">
<tr>
<td>Enter  policyno</td><td><input type="text" name="policyno" value="<? echo $rs1[1]; ?> "/></td>
</tr>
<tr>
<td>Enter  policyid</td>
<td><input type="text" name="policyid" value="<? echo $rs1[2]; ?> "/></td>
</tr>
<tr>
<td>Enter  custid</td>
<td><input type="text" name="custid" value="<? echo $rs1[3]; ?> "/></td>
</tr>
<tr>
<td>Enter  type</td>
<td><input type="text" name="type" value="<? echo $rs1[4]; ?> "/></td>
</tr>
<tr>
<td>Enter  purdate</td>
<td><input type="text" name="purdate" value="<? echo $rs1[5]; ?> "/></td>
</tr>
<tr>
<td>Enter premium</td><td><input type="text" name="premium" value="<? echo $rs1[6]; ?> "/></td>
</tr>
<tr>
<td>Enter frequency</td>
<td><input type="text" name="frequency" value="<? echo $rs1[7]; ?> "/></td>
</tr>
<tr>
<td>Enter policystdate</td>
<td><input type="text" name="policystdate" value="<? echo $rs1[8]; ?> "/></td>
</tr>
<tr>
<td>Enter policyeddate</td>
<td><input type="text" name="policyeddate" value="<? echo $rs1[9]; ?> "/></td>
</tr>
<tr>
<td>Enter nextpremiumdt</td>
<td><input type="text" name="nextpremiumdt" value="<? echo $rs1[10]; ?> "/></td>
</tr>
<tr>
<td>Enter approved</td>
<td><input type="text" name="approved" value="<? echo $rs1[11]; ?> "/></td>
</tr>
<tr>
<td>Enter nomineeid</td>
<td><input type="text" name="nomineeid" value="<? echo $rs1[12]; ?> "/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="hidden" name="h1" value="<? echo $rs1[0]; ?>" />
<input type="submit" value="update" name="updatepolicy"></td>
</tr>
</form>
</center>
</table>
<?
	include("./include/footer.php");
?>