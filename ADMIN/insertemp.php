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
		
		
			$q="INSERT INTO  emp ( 	empid,name,lastname,designation,address,city,pincode,phno,doj,gender,emailid,loginid) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12')";

			mysql_query($q);
			header("location:ademp.php");
			//die($q);
			//$qry="SELECT * FROM login";
	//$rs=mysql_query($qry);
	}
	
?>
<center>
<form method="post" action="insertemp.php">

<table border="2" align="center">

<tr>
	<td>empid</td>
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
	<td>designation</td>
    <td><input type="text" name="txt4"/> </td>
</tr>
<tr>
	<td>address</td>
    <td><input type="text"  name="txt5"/> </td>
</tr>
<tr>
	<td>city</td>
    <td><input type="text"  name="txt6"/> </td>
</tr>
<tr>
	<td>pincode</td>
    <td><input type="text" name="txt7"/> </td>
</tr>
<tr>
	<td>phno</td>
    <td><input type="text" name="txt8"/> </td>
</tr>
<tr>
	<td>doj</td>
    <td><input type="text" name="txt9"/> </td>
</tr>
<tr>
	<td>gender</td>
    <td><input type="text" name="txt10"/> </td>
</tr>
<tr>
	<td>emailid</td>
    <td><input type="text"  name="txt11"/> </td>
</tr>
<tr>
	<td>loginid</td>
    <td><input type="text"  name="txt12"/> </td>
</tr>
<tr>
	<td><input type="submit"  value="GO"  name="in"/></td>
	
</tr>
	
</table>
</form>
</center>
<?
	include("./include/footer.php");
?>


