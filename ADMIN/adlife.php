<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from life_plans";
				$res=mysql_query($query,$con);
            	echo "<table border=2 background='Dark-wooden-website-background' align='center' >";
				echo "<tr>";
					echo "<th>  </th>";
					echo "<th>  </th>";
					echo "<th> plans </th>";
					echo "<th> Entry Age </th>";
					echo "<th> Policy Term </th>";
					echo "<th> Sum assured </th>";
						echo "</tr>";
				$cnt=1;
				while($row=mysql_fetch_array($res))
				{
	
					//if($cnt==4)
					//{
						//echo "</tr><tr>";
						//$cnt=1;
					//}
					echo "<tr>";
					echo "<td align='center'> <a href='updatelife.php?id=$row[0]'><img src='PENCIL01.ico' height='80%' width='80%'/></a> </td>";
					echo "<td align='center'> <a href='deletelife.php?id=$row[0]'><img src='W95MBX01.ico' height='80%' width='80%'/></a> </td>";
					
					//echo "<td>".$row['no']."</td>";
					echo "<td>".$row['plans']."</td>";
					echo "<td>".$row['entryage']."</td>";
					echo "<td>".$row['policyteam']."</td>";
					echo "<td>".$row['sumassured']."</td>";
				
					
					echo "</tr>";
					
					$cnt=$cnt+1;
				}
					echo "<form method='post' action='insertlife.php'>";
					echo "<td colspan='7' align='center'> <input type='submit' value='INSERT' name='insertlife'/> </td>";
					echo "</form>";
					echo "</table>";
            
	include("./include/footer.php");
?>
