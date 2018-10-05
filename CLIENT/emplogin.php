<?
	include("./include/header.php");
?>
<table bgcolor="#CC3300"  height="20%" width="20%" hspace="450%" vspace="200%">
<tr>
<td  align="center" colspan="2" >
<font color="#00FF00">
EMPLOYEE LOGIN PAGE
</font>
</td>
</tr>
<tr>
<td width="10%">
<form method="post" action="empcheck.php" >
EMP ID:
</td>
<td width="20%">
<input type="text" name="empid" placeholder="ENTER EMPLOYEE ID" /><br />
</td>
</tr>
<tr>
<td>
PASSWORD:
</td>
<td>
<input type="password" name="psd" placeholder="ENTER PASSWORD"/><br />
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit"  name="submit" value="LOGIN"/>
<input type="reset" value="CANCEL" />
</td>
<tr>
<td colspan="2" align="center">
<a href="empsignup.php">SIGN UP</a>
</td>
</tr>
</form>
</td>
</tr>
</table>
<?          
	include("./include/footer.php");
?>
