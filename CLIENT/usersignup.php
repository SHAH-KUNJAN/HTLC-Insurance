<?
include("./include/header.php");
	mysql_connect('localhost','root');
	
	$db=mysql_select_db('insurance');
	
	if(isset($_REQUEST['in']))
	{
		//$q1=$_REQUEST['txt1'];
		$q1=$_REQUEST['txt1'];
		$q2=$_REQUEST['txt2'];
		$q3=$_REQUEST['txt3'];
		$q4=$_REQUEST['txt4'];
		$q5=$_REQUEST['txt5'];
		$q6=$_REQUEST['txt6'];
		$q7=$_REQUEST['txt7'];
		$q8=$_REQUEST['txt8'];
		$q9=$_REQUEST['txt9'];
		$q10=$_REQUEST['txt10'];
		$q11=$_REQUEST['txt11'];
		$q12=$_REQUEST['txt12'];
		$q13=$_REQUEST['txt13'];
		$q14=$_REQUEST['txt14'];
		$q15=$_REQUEST['txt15'];
		$q16=$_REQUEST['txt16'];
		
		
			$q="INSERT INTO  cus (custid,name,lastname,dob,loginid,password,address,phno,emailid,gender,nationality,country,state,city,pincode,occupation) VALUES ('$q1','$q2','$q3','$q4','$q5','$q16','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15')";

			mysql_query($q);
			//die($q);
			//$qry="SELECT * FROM login";
	//$rs=mysql_query($qry);
	}
	
?>
<center>
<form method="post" action="usersignup.php">

<table border="2" align="center">

<tr>
	<td>custid</td>
    <td><input type="text" name="txt1"/> </td>
</tr>
<tr>
	<td>name</td>
    <td><input type="text" name="txt2"/> </td>
</tr>
<tr>
	<td>lastname</td>
    <td><input type="text" name="txt3"/> </td>
</tr>
<tr>
	<td>dob</td>
    <td><input type="text" name="txt4"/> </td>
</tr>
<tr>
	<td>loginid</td>
    <td><input type="text"  name="txt5"/> </td>
</tr>
<tr>
	<td>password</td>
    <td><input type="text"  name="txt16"/> </td>
</tr>
<tr>
	<td>address</td>
    <td><input type="text"  name="txt6"/> </td>
</tr>
<tr>
	<td>phno</td>
    <td><input type="text" name="txt7"/> </td>
</tr>
<tr>
	<td>emailid</td>
    <td><input type="text"  name="txt8"/> </td>
</tr>
<tr>
	<td>gender</td>
    <td><input type="text" name="txt9"/> </td>
</tr>
<tr>
	<td>nationality</td>
    <td><input type="text"  name="txt10"/> </td>
</tr>
<tr>
	<td>country</td>
   <!-- <td><input type="text"  name="txt11"/> </td>-->
   <td><select name="txt11"><option value="1">INDIA</option>
   <option value="2"> USA</option>
   <option value="3">UK</option>
   </select> </td>
</tr>
<tr>
	<td>state</td>
   <!-- <td><input type="text"  name="txt12"/> </td>-->
   <? if('$txt11'==1)
   { ?>
    <td><select name="txt12"><option value="1">GUJARAT</option>
   <option value="2"> MAHARSTRA</option>
   <option value="3">RAJASTAN</option>
   </select> </td>
   <? } 
   else if('$txt11'==2)
   { ?>
    <td><select name="txt12"><option value="1">GUJARAT</option>
   <option value="2"> MAHARSTRA</option>
   <option value="3">RAJASTAN</option>
   </select> </td>
   <? } 
   else if('$txt11'==3)
   { ?>
    <td><select name="txt12"><option value="1">GUJARAT</option>
   <option value="2"> MAHARSTRA</option>
   <option value="3">RAJASTAN</option>
   </select> </td>
   <? } ?>
</tr>
<tr>
	<td>city</td>
    <td><input type="text"  name="txt13"/> </td>
</tr>
<tr>
	<td>pincode</td>
    <td><input type="text" name="txt14"/> </td>
</tr>
<tr>
	<td>occupation</td>
    <td><input type="text" name="txt15"/> </td>
</tr>
<tr>
	<td><input type="submit"  value="SIGN UP"  name="in"/></td>
	
</tr>
	
</table>
</form>
</center>

<?
include("./include/footer.php");
?>

