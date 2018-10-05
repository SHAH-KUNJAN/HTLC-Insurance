<?php 
	session_start();
	if(!isset($_SESSION['unm']))
	{
		header('Location:login.php');
	}
	else
	{		
		include("./include/php/header.php");
		$a=$_REQUEST['v'];
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("mfg",$con);
		$query="select * from product where pid=$a";
		$res=mysql_query($query,$con);
		$hrow=mysql_fetch_array($res);
		
?><!-- also check validations -->
	<form name="frmproduct" method="post" action="editproduct1.php" enctype="multipart/form-data">
    <input type="hidden" name="h" value="<?php echo $a;?>" />
    <table style='color:#CCCCCC;'>
    	<tr>
        	<td align="right">Product Name : </td>
            <td><input type="text" name="txtpnm" value="<?php echo $hrow['pnm'];?>"/></td>
        </tr>
        <tr>
        	<td align="right">Company : </td>
            <td><?php //create a function and call it from here
				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("mfg",$con);
				$query="select * from company";
				$res=mysql_query($query,$con);
				echo "<select name='selcomp'>";
				while($row=mysql_fetch_array($res))
				{
					if($row['cid']==$hrow['cid'])
					echo "<option value='".$row['cid']."' selected='true'>".$row['cnm']."</option>";
					else
					echo "<option value='".$row['cid']."'>".$row['cnm']."</option>";
				}
				echo "</select>";
            ?></td>
        </tr>
        <tr>
        	<td align="right">Change Image : </td>
            <td><table><tr><td><input type="checkbox" id="chk" name="chk" value="1" onchange="fun()"/>
            <div id="d1"></div>
            </td>
            <td><img src='<?php echo $hrow['pimg'];?>' height="50" width="60"/>
            </td></tr></table>
            </td>
        </tr>
        <tr align="center">
        	<td><input type="submit" name="subadd" value="Update" onclick="return funval()"/></td>
            <td><input type="reset" name="rescan" value="Cancel"/></td>
        </tr>
      </table>
   </form>
<?php
		include("./include/php/footer.php");
	}
?>
<script type="text/javascript">
	function fun()
	{
		var a=document.getElementById('d1');
		d1.innerHTML="<input type='file' id='f1' name='fimg'>";
	}
	function funval()
	{
		var b=document.getElementById('f1');
		var c=document.getElementById('chk');
		if(b.value=="" && c.checked)
		{
			alert("Select Image");
			return false;
		}
		return true;
	}
</script>