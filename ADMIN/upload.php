<?
	include("./include/header.php");
?>
<table border="2" align="center" hspace="300" vspace="100">
<form name="frm" id="frm" action="up.php" method="post" enctype="multipart/form-data">
<tr>
<td>
<input type="file" name="fle" id="file" />
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="upload" />
</td>
</tr>
</form>
</table>
<?
	include("./include/footer.php");
?>