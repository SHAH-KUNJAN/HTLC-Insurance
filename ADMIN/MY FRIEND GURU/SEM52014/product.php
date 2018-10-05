<?php 
	session_start();
	if(!isset($_SESSION['unm']))
	{
		header('Location:login.php');
	}
	else
	{		
		include("./include/php/header.php");
?>
	<table height="100%" width="100%">
    	<tr height="5%">
        	<td><a href="addproduct.php">Add Product</a></td>
        </tr>
        <tr height="95%">
        	<td>
        	<?php $con=mysql_connect("localhost","root","");
				$db=mysql_select_db("mfg",$con);
				$query="select * from product p,company c where p.cid=c.cid";
				$res=mysql_query($query,$con);
            	echo "<table><tr>";
				$cnt=1;
				while($row=mysql_fetch_array($res))
				{
					if($cnt==4)
					{
						echo "</tr><tr>";
						$cnt=1;
					}
					echo "<td><table><tr><td colspan='2'><img src='".$row['pimg']."' height='100' width='150'></img></td></tr>";
					echo "<tr><td align='right'>Name : </td>";
					echo "<td>".$row['pnm']."</td></tr>";
					echo "<tr><td align='right'>Company : </td>";
					echo "<td>".$row['cnm']."</td></tr>";
					echo "<tr align='center'><td><a href='editproduct.php?v=".$row['pid']."'>Edit</a></td>";
					echo "<td><a href='deleteproduct.php?v=".$row['pid']."'>Delete</a></td></tr></table></td>";

					$cnt=$cnt+1;
				}
					echo "</tr></table>";
            ?></td>
        </tr>
    </table>
<?php
		include("./include/php/footer.php");
	}
?>