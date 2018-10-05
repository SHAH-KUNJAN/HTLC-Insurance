<?
include("./include/header.php");
	mysql_connect('localhost','root');
	
	$db=mysql_select_db('insurance');
	
	if(isset($_REQUEST['in']))
	{
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

		
		
			$q="INSERT INTO policy (policyid,custid,type,purdate,premium,frequency,policystdate,policyeddate,nextpremiumdt,approved,nomineeid) VALUES
			                                                                    ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11')";

			mysql_query($q);
			die($q);
			//$qry="SELECT * FROM login";
	//$rs=mysql_query($qry);
	}
	
?>
<center>
<form method="post" action="insertpolicy.php">

<table border="2" align="center">

<tr>
	<td>policyid</td>
    <td><input type="text" name="txt1"/> </td>
</tr>
<tr>
	<td>custid</td>
    <td><input type="text"  name="txt2"/> </td>
</tr>
<tr>
	<td>type</td>
    <td><input type="text"  name="txt3"/> </td>
</tr>
<tr>
	<td>purdate</td>
    <td><input type="text"  name="txt4"/> </td>
</tr>
<tr>
	<td>premium</td>
    <td><input type="text"  name="txt5"/> </td>
</tr>
<tr>
	<td>frequency</td>
    <td><input type="text"  name="txt6"/> </td>
</tr>
<tr>
	<td>policystdate</td>
    <td><input type="text"  name="txt7"/> </td>
</tr>
<tr>
	<td>policyeddate</td>
    <td><input type="text"  name="txt8"/> </td>
</tr>
<tr>
	<td>nextpremiumdt</td>
    <td><input type="text"  name="txt9"/> </td>
</tr>
<tr>
	<td>approved</td>
    <td><input type="text"  name="txt10"/> </td>
</tr>
<tr>
	<td>nomineeid</td>
    <td><input type="text"  name="txt11"/> </td>
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


