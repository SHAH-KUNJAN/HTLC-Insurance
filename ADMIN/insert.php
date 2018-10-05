<?
	mysql_connect('localhost','root');
	
	$db=mysql_select_db('insurance');
	
	if(isset($_REQUEST['in']))
	{
		//$q1=$_REQUEST['txt1'];
		$q2=$_REQUEST['txt2'];
		$q3=$_REQUEST['txt3'];
		
		
		
			$q="INSERT INTO health (`policyno`,`details`) VALUES ('$q2','$q3')";

			mysql_query($q);
			//die($q);
			//$qry="SELECT * FROM login";
	//$rs=mysql_query($qry);
	}
	
?>
<center>
<form method="post" action="insert.php">

<table border="2" align="center">

<tr>
	<td>policyno</td>
    <td><input type="text" name="txt2"/> </td>
</tr>
<tr>
	<td>detail</td>
    <td><input type="text"  name="txt3"/> </td>
</tr>
<tr>
	<td><input type="submit"  value="GO"  name="in"/></td>
	
</tr>
	
</table>
</form>
</center>


