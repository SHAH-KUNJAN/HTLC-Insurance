<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from car_plans";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center' >";
				echo "<tr>";
					echo "<th>  </th>";
					echo "<th>  </th>";
					echo "<th>insurer </th>";
					echo "<th> thirdparty </th>";
					echo "<th> garages </th>";
					echo "<th> addoncovers </th>";
					echo "<th> features </th>";
					echo "<th>  exception </th>";
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
					echo "<td align='center'> <a href='updatecar.php?id=$row[0]'><img src='PENCIL01.ico' height='80%' width='80%'/></a> </td>";
					echo "<td align='center'> <a href='deletecar.php?id=$row[0]' ><img src='W95MBX01.ico' height='80%' width='80%'/></a> </td>";
					
					echo "<td>".$row['insurer']."</td>";
					echo "<td>".$row['thirdparty']."</td>";
					echo "<td>".$row['garages']."</td>";
					echo "<td>".$row['addoncovers']."</td>";
					echo "<td>".$row['features']."</td>";
					echo "<td>".$row['exception']."</td>";
					echo "</tr>";
					
					//$cnt=$cnt+1;
					$i++;
					
				}
					echo "<form method='post' action='insertcar.php'>";
					echo "<td colspan='8' align='center'><input type='submit' value='INSERT' name='insertcar'/> </td>";
					echo "</form>";
					echo "</table>";
            
	include("./include/footer.php");
?>
