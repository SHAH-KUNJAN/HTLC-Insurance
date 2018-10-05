<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from health_plans";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center'  >";
				echo "<tr>";
					echo "<th>  </th>";
						echo "<th>  </th>";
					echo "<th> insurer </th>";
					echo "<th>  hospitals </th>";
						echo "<th> planname </th>";
							echo "<th> sumassured </th>";
								echo "<th> features </th>";
									echo "<th> featureexclued </th>";
						echo "</tr>";
				//$cnt=1;
				$i=0;
				while($row=mysql_fetch_array($res))
				{
	
					//if($cnt==4)
				//	{
						//echo "</tr><tr>";
					//	$cnt=1;
					//}
					echo "<tr>";
					//echo "<td>".$row['no']."</td>";
					echo "<td align='center'> <a href='updatehealth.php?id=$row[0]'><img src='PENCIL01.ico' height='80%' width='80%'/></a> </td>";
					echo "<td align='center'> <a href='deletehealth.php?id=$row[0]'><img src='W95MBX01.ico' height='80%' width='80%'/></a> </td>";
					
				
					echo "<td>".$row['insurer']." </td>";
					echo "<td>  ".$row['hospitals']." </td>";
						echo "<td> ".$row['planname']." </td>";
							echo "<td> ".$row['sumassured']."</td>";
								echo "<td>".$row['features']." </td>";
									echo "<td>".$row['featureexclued']." </td>";
					echo "</tr>";
					
					//$cnt=$cnt+1;
					$i++;
				}
				echo "<form method='post' action='inserthealth.php'>";
					echo "<td colspan='4' align='center'> <input type='submit' value='INSERT' name='inserthealth'/> </td>";
					echo "</table>";
            
	include("./include/footer.php");
?>
