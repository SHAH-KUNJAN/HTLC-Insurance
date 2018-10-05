<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from emp";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center' >";
				echo "<tr>";
					echo "<th>  </th>";
					echo "<th>  </th>";
					echo "<th> empid </th>";
					echo "<th>  name </th>";
					echo "<th> lastname </th>";
					echo "<th> designation </th>";
					echo "<th> address </th>";
					echo "<th> city </th>";
					echo "<th> pincode </th>";
					echo "<th> phno </th>";
					echo "<th> doj </th>";
					echo "<th> gender </th>";
					echo "<th> emailid </th>";
					echo "<th> loginid </th>";
					
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
					//echo "<td>".$row['no']."</td>";
					echo "<td align='center'> <a href='updateemp.php?id=$row[0]'><img src='PENCIL01.ico' height='80%' width='80%'/></a> </td>";
					echo "<td align='center'> <a href='deleteemp.php?id=$row[0]'><img src='W95MBX01.ico' height='80%' width='80%'/></a> </td>";
					
					echo "<td>".$row['empid']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['lastname']."</td>";
					echo "<td>".$row['designation']."</td>";
					echo "<td>".$row['address']."</td>";
					echo "<td>".$row['city']."</td>";
					echo "<td>".$row['pincode']."</td>";
					echo "<td>".$row['phno']."</td>";
					echo "<td>".$row['doj']."</td>";
					echo "<td>".$row['gender']."</td>";
					echo "<td>".$row['emailid']."</td>";
					echo "<td>".$row['loginid']."</td>";
					
					echo "</tr>";
					
					//$cnt=$cnt+1;
					$i++;
				}
					echo "<form method='post' action='insertemp.php'>";
					echo "<td colspan='14' align='center'> <input type='submit' value='INSERT' name='insertemp'/> </td>";
					echo "</table>";
            
	include("./include/footer.php");
?>
