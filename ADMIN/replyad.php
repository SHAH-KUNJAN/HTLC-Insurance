<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from query";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center' >";
				echo "<tr>";
					echo "<th>  </th>";
					//echo "<th>  </th>";
					echo "<th> QUERYID </th>";
					echo "<th> QUERY </th>";
					echo "<th> POSTEDBY </th>";
					echo "<th> DATE </th>";
					echo "<th> REPLY </th>";
					//echo "<th> purchasevalue </th>";
					//echo "<th>  make </th>";
					//echo "<th>  detail </th>";
						echo "</tr>";
				//$cnt=1;
				$i=0;
				while($row=mysql_fetch_array($res))
				{
	
					//if($cnt==4)
					//{
						//echo "</tr><tr>";
						//$cnt=1;
					//}
					echo "<tr>";
			//echo "<td align='center'> <a href='updatereply.php?id=$row[0]'><img src='PENCIL01.ico' height='80%' width='80%'/></a> </td>";
					echo "<td align='center'> <a href='deleteqry.php?id=$row[0]' ><img src='W95MBX01.ico' height='80%' width='80%'/></a> </td>";
					
					echo "<td>".$row['queryid']."</td>";
					echo "<td>".$row['query']."</td>";
					echo "<td>".$row['postedby']."</td>";
					echo "<td>".$row['date']."</td>";
					echo "<td>".$row['reply']."</td>";
					//echo "<td>".$row['purchasevalue']."</td>";
					//echo "<td>".$row['make']."</td>";
					//echo "<td>".$row['detail']."</td>";
					echo "</tr>";
					
					//$cnt=$cnt+1;
					$i++;
					
				}
					//echo "<form method='post' action='insertcar.php'>";
					//echo "<td colspan='8' align='center'><input type='submit' value='INSERT' name='insertcar'/> </td>";
					echo "</form>";
					echo "</table>";
            
	include("./include/footer.php");
?>
