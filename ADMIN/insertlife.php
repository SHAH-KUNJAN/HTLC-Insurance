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
		
		
			$q="INSERT INTO life (policyno,lifecover,premiumpay,nomineeid,details) VALUES ('$q1','$q2','$q3','$q4','$q5')";

			mysql_query($q);
			//die($q);
			//$qry="SELECT * FROM login";
	//$rs=mysql_query($qry);
	}
	
?>
<center>
<form method="post" action="insertlife.php">

<table border="2" align="center">

<tr>
	<td>policyno</td>
    <td><input type="text" name="txt1"/> </td>
</tr>
<tr>
	<td>lifecover</td>
    <td><input type="text" name="txt2"/> </td>
</tr>
<tr>
	<td>premiumpay</td>
    <td><input type="text" name="txt3"/> </td>
</tr>
<tr>
	<td>nomineeid</td>
    <td><input type="text" name="txt4"/> </td>
</tr>
<tr>
	<td>detail</td>
    <td><input type="text"  name="txt5"/> </td>
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


