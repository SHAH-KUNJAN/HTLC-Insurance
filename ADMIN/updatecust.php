<?
	include("./include/header.php");
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('insurance');
	
	$id=$_REQUEST['id'];
	if(isset($_REQUEST['updatecust']))
	{
		//$q=$_REQUEST['chk'];
		$no=$_REQUEST['h1'];
		$cusid=$_REQUEST['custid'];
		$nm=$_REQUEST['name'];
		$lnm=$_REQUEST['lastname'];
		$dob=$_REQUEST['dob'];
		$log=$_REQUEST['loginid'];
		$addr=$_REQUEST['address'];
		$ph=$_REQUEST['phno'];
		$em=$_REQUEST['emailid'];
		$g=$_REQUEST['gender'];
		$nat=$_REQUEST['nationality'];
		$cou=$_REQUEST['country'];
		$st=$_REQUEST['state'];
		$ct=$_REQUEST['city'];
		$pin=$_REQUEST['pincode'];
		$occu=$_REQUEST['occupation'];
		
		
		
		
		//for($i=0;$i<=count($q);$i++)
		//{
			$q="UPDATE cus SET 
				custid='$cusid',
				name='$nm',
				lastname='$lnm',
				dob='$dob',
				loginid='$log',
				address='$addr',
				phno='$ph',
				emailid='$em',
				gender='$g',
				nationality='$nat',
				country='$cou',
				state='$st',
				city='$ct',
				pincode='$pin',
				occupation='$occu'
				WHERE no=$no " ;
					
			mysql_query($q);
			//die($q);
			header("location:adcust.php");
		//}
	}
	$qry="SELECT * FROM cus WHERE no='$id' ";
	$rs=mysql_query($qry);
	$rs1=mysql_fetch_array($rs);
?>
<center>
<table border="2" vspace="100%" align="center">
<form method="post" action="updatecust.php">
<tr>
<td>Enter  custid</td>
<td><input type="text" name="custid" value="<? echo $rs1[1]; ?> "/></td>
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
<td>Enter dob</td>
<td><input type="text" name="dob" value="<? echo $rs1[4]; ?> "/></td>
</tr>
<tr>
<td>Enter  loginid</td>
<td><input type="text" name="loginid" value="<? echo $rs1[5]; ?> "/></td>
</tr>
<tr>
<td>Enter  address</td>
<td><input type="text" name=" address" value="<? echo $rs1[6]; ?> "/></td>
</tr>
<tr>
<td>Enter  phno</td>
<td><input type="text" name="phno" value="<? echo $rs1[7]; ?> "/></td>
</tr>
<tr>
<td>Enter  emailid</td>
<td><input type="text" name="emailid" value="<? echo $rs1[8]; ?> "/></td>
</tr>
<tr>
<td>Enter  gender</td>
<td><input type="text" name="gender" value="<? echo $rs1[9]; ?> "/></td>
</tr>
<tr>
<td>Enter  nationality</td>
<td><input type="text" name="nationality" value="<? echo $rs1[10]; ?> "/></td>
</tr>
<tr>
<td>Enter  country</td>
<td><input type="" name="country" value="<? echo $rs1[11]; ?> "/></td>
</tr>
<tr>
<td>Enter  state</td>
<td><input type="text" name="state" value="<? echo $rs1[12]; ?> "/></td>
</tr>
<tr>
<td>Enter  city</td>
<td><input type="text" name="city" value="<? echo $rs1[13]; ?> "/></td>
</tr>
<tr>
<td>Enter  pincode</td>
<td><input type="text" name="pincode" value="<? echo $rs1[14]; ?> "/></td>
</tr>
<tr>
<td>Enter  occupation</td>
<td><input type="text" name="occupation" value="<? echo $rs1[15]; ?> "/></td>
<tr>
<td colspan="2" align="center"><input type="hidden" name="h1" value="<? echo $rs1[0]; ?>" />
<input type="submit" value="UPDATE" name="updatecust"></td>
</tr>

</form>

</center>
</table>
<?
	include("./include/footer.php");
?>