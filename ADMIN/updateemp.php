<?
	include("./include/header.php");
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('insurance');
	
	$id=$_REQUEST['id'];
	if(isset($_REQUEST['updateemp']))
	{
		//$q=$_REQUEST['chk'];
		$no=$_REQUEST['h1'];
		$emp=$_REQUEST['empid'];
		$nm=$_REQUEST['name'];
		$lnm=$_REQUEST['lastname'];
		$des=$_REQUEST['designation'];
		$addr=$_REQUEST['address'];
		$ct=$_REQUEST['city'];
		$pin=$_REQUEST['pincode'];
		$ph=$_REQUEST['phno'];
		$doj=$_REQUEST['doj'];
		$g=$_REQUEST['gender'];
		$em=$_REQUEST['emailid'];
		$log=$_REQUEST['loginid'];
		//for($i=0;$i<=count($q);$i++)
		//{
			$q="UPDATE emp SET 
				empid='$emp',
				name='$nm',
				lastname='$lnm',
				designation='$des',
				address='$addr',
				city='$ct',
				pincode='$pin',
				phno='$ph',
				doj='$doj',
				gender='$g',
				emailid='$em',
				loginid='$log'
				WHERE no=$no " ;
					
			mysql_query($q);
			//die($q);
			header("location:ademp.php");
		//}
	}
	$qry="SELECT * FROM emp WHERE no='$id' ";
	$rs=mysql_query($qry);
	$rs1=mysql_fetch_array($rs);
?>
<center>
<table border="2" vspace="100%" align="center">
<form method="post" action="updateemp.php">
<tr>
<td>Enter  empid</td>
<td><input type="text" name="empid" value="<? echo $rs1[1]; ?> "/></td>
</tr>
<tr>
<td>Enter  name</td>
<td><input type="text" name="name" value="<? echo $rs1[2]; ?> "/></td>
</tr>
<tr>
<td>Enter  lastname</td>
<td><input type="text" name="lastname" value="<? echo $rs1[3]; ?> "/></td>
</tr>
<tr>
<td>Enter designation</td>
<td><input type="text" name="designation" value="<? echo $rs1[4]; ?> "/></td>
</tr>
<tr>
<td>Enter  address</td>
<td><input type="text" name=" address" value="<? echo $rs1[5]; ?> "/></td>
</tr>
<tr>
<td>Enter  city</td>
<td><input type="text" name="city" value="<? echo $rs1[6]; ?> "/></td>
</tr>
<tr>
<td>Enter  pincode</td>
<td><input type="text" name="pincode" value="<? echo $rs1[7]; ?> "/></td>
</tr>
<tr>
<td>Enter  phno</td>
<td><input type="text" name="phno" value="<? echo $rs1[8]; ?> "/></td>
</tr>
<tr>
<td>Enter  doj</td>
<td><input type="text" name="doj" value="<? echo $rs1[9]; ?> "/></td>
</tr>
<tr>
<td>Enter  gender</td>
<td><input type="text" name="gender" value="<? echo $rs1[10]; ?> "/></td>
</tr>
<tr>
<td>Enter  emailid</td>
<td><input type="text" name="emailid" value="<? echo $rs1[11]; ?> "/></td>
</tr>
<tr>
<td>Enter  loginid</td>
<td><input type="text" name="loginid" value="<? echo $rs1[12]; ?> "/></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="hidden" name="h1" value="<? echo $rs1[0]; ?>" />
<input type="submit" value="UPDATE" name="updateemp"></td>
</tr>
</form>
</center>
</table>
<?
	include("./include/footer.php");
?>