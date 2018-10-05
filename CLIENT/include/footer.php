<?
session_start();
?>
</td>
</tr>
<tr>
<td valign="top">
	<table width="100%">
	<tr>
	<!--	<td><a href="upload.php">UPLOAD</a></td>-->
			<td><a href="about.php">ABOUT US</a></td>
			<td><a href="contact.php">CONTECT</a></td>
    		<td><a href="policy.php">POLICY</a></td>
			<td><a href="form.php">FORM</a></td>

	<? if(isset($_SESSION['emp']))
		{ ?>
        <td><a href="payment.php">PAYMENT</a></td> 
		<td><a href="query.php">QUERY</a></td>
    <? } ?>
	
	
	<? if(isset($_SESSION['user']))
		{ ?>
        <td><a href="payment.php">PAYMENT</a></td> 
		<td><a href="query.php">QUERY</a></td>
     <? } ?> 
	
	</tr>
	</table>
</td>
</tr>

<tr>
<td colspan=2 align="center">
<img src="facebook.png" height="60" width="60" />
<img src="twitter.png" height="60" width="60" />
<img src="instagram.png" height="60" width="60" />
<img src="google-plus.png" height="60" width="60" />
</tr>

<tr bgcolor="#66CCFF">
<td colspan=2 align="center" height=10%>COPY RIGHT BY - KUNJAN & PRASHANT </td>
</tr>

</table>


</body>
</html>