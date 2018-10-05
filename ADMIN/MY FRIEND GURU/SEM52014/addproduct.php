<?php 
	session_start();
	if(!isset($_SESSION['unm']))
	{
		header('Location:login.php');
	}
	else
	{		
		include("./include/php/header.php");
?><!-- also check validations -->
	<form name="frmproduct" method="post" action="addproduct1.php" enctype="multipart/form-data">
    <table>
    	<tr>
        	<td align="right">Product Name : </td>
            <td><input type="text" name="txtpnm" required/></td>
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
					echo "<option value='".$row['cid']."'>".$row['cnm']."</option>";
				}
				echo "</select>";
            ?></td>
        </tr>
        <tr>
        	<td align="right">Image : </td>
            <td><input type="file" name="fimg"/></td>
        </tr>
        <tr align="center">
        	<td><input type="submit" name="subadd" value="Add"/></td>
            <td><input type="reset" name="rescan" value="Cancel"/></td>
        </tr>
      </table>
   </form>
<?php
		include("./include/php/footer.php");
	}
?>