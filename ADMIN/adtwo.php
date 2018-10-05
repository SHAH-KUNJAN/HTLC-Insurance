<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from two_plans";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center' >";
				echo "<tr>";
					echo "<th>  </th>";
					echo "<th>  </th>";
					echo "<th>insurer </th>";
					echo "<th> thirdparty </th>";
					echo "<th>addoncovers </th>";
					echo "<th> feature </th>";
					echo "<th> limitation </th>";
					
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
					echo "<td align='center'> <a href='updatetwo.php?id=$row[0]'><img src='PENCIL01.ico' height='80%' width='80%'/></a> </td>";
					echo "<td align='center'> <a href='deletetwo.php?id=$row[0]'><img src='W95MBX01.ico' height='80%' width='80%'/></a> </td>";
					
					//echo "<td>".$row['no']."</td>";
					echo "<td>".$row['insurer']."</td>";
					echo "<td>".$row['thirdparty']."</td>";
					echo "<td>".$row['addoncovers']."</td>";
					echo "<td>".$row['feature']."</td>";
					echo "<td>".$row['limitation']."</td>";
					
					
					echo "</tr>";
					
					$cnt=$cnt+1;
				}
					echo "<form method='post' action='inserttwo.php'>";
					echo "<td colspan='8' align='center'> <input type='submit' value='INSERT' name='inserttwo'/> </td>";
					echo "</table>";
            
	include("./include/footer.php");
?>
