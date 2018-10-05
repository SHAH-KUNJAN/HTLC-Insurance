<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from cus";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center' >";
				echo "<tr>";
					echo "<th>  </th>";
					echo "<th>  </th>";
					echo "<th> custid </th>";
					echo "<th>  name </th>";
					echo "<th> lastname </th>";
					echo "<th> dob </th>";
					echo "<th> loginid </th>";
					echo "<th> address</th>";
					echo "<th> phno </th>";
					echo "<th> emailid </th>";
					echo "<th> gender </th>";
					echo "<th> nationality </th>";
					echo "<th> country </th>";
					echo "<th> state </th>";
					echo "<th> city </th>";
					echo "<th> pincode </th>";
					echo "<th> occupation </th>";
					
				echo "</tr>";
					
				$cnt=1;
				while($row=mysql_fetch_array($res))
				{
	
				//	if($cnt==4)
					//{
						//echo "</tr><tr>";
				//		$cnt=1;
			//		}
					echo "<tr>";
					//echo "<td>".$row['no']."</td>";
					echo "<td align='center'> <a href='updatecust.php?id=$row[0]'><img src='PENCIL01.ico' height='80%' width='80%'/></a> </td>";
					echo "<td align='center'> <a href='deletecus.php?id=$row[0]'><img src='W95MBX01.ico' height='80%' width='80%'/></a> </td>";
					
					echo "<td>".$row['custid']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['lastname']."</td>";
					echo "<td>".$row['dob']."</td>";
					echo "<td>".$row['loginid']."</td>";
					echo "<td>".$row['address']."</td>";
					echo "<td>".$row['phno']."</td>";
					echo "<td>".$row['emailid']."</td>";
					echo "<td>".$row['gender']."</td>";
					echo "<td>".$row['nationality']."</td>";
					echo "<td>".$row['country']."</td>";
					echo "<td>".$row['state']."</td>";
					echo "<th>".$row['city']." </th>";
					echo "<th>".$row['pincode']." </th>";
					echo "<th>".$row['occupation'] ."</th>";
					
					echo "</tr>";
					
					$cnt=$cnt+1;
				}
					echo "<form method='post' action='insertcust.php'>";
					echo "<td colspan='17' align='center'> <input type='submit' value='INSERT' name='insertcust'/> </td>";
					echo "</form>";
					echo "</table>";
            
	include("./include/footer.php");
?>
