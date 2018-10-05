<?php
	include("./include/php/header.php");
?>
<script type="text/javascript" language="javascript">
	function chk()
	{
		var a=document.getElementById("txtunm");
		var b=document.getElementById("txtpsw");
		var res=chk_blank(a);
		if(res==false)
			return false;
		res=chk_blank(b);
		if(res==false)
			return false;
			
		return true;
	}
</script>
<body>
	<form name="frmlogin" method="post" action="chklogin.php">
		<table>
        	<tr>
            	<td>Username :	</td>
                <td><input type="text" name="txtunm" id="txtunm"/></td>
            </tr>
            <tr>
            	<td>Password : </td>
                <td><input type="password" name="txtpsw" id="txtpsw"/></td>
            </tr>
            <tr>
            	<td><input type="submit" name="sublog" value="Log In" onClick="return chk();"/></td>
                <td><input type="reset" name="reslog" value="Cancel"/></td>
            </tr>
        </table>
    </form>
</body>
<?php
	include("./include/php/footer.php");
?>