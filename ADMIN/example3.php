<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from car";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center' >";
				echo "<tr>";
					echo "<th> </th>";
					echo "<th> </th>";
					echo "<th> </th>";
					echo "<th> policyno </th>";
					echo "<th> regno </th>";
					echo "<th> engineno </th>";
					echo "<th> purchasevalue </th>";
					echo "<th>  make </th>";
					echo "<th>  detail </th>";
						echo "</tr>";
				$cnt=1;
				while($row=mysql_fetch_array($res))
				{
	
					if($cnt==4)
					{
						//echo "</tr><tr>";
						$cnt=1;
					}
					echo "<tr>";
					echo "<td> <a href='update3.php?id=$row[0]'>UPDATE</a> </td>";
					echo "<td> <a href='insertcar.php?id=$row[0]'>INSERT</a> </td>";
					echo "<td> <a href='deletecar.php?id=$row[0]'>DELETE</a> </td>";
					
					//echo "<td>".$row['no']."</td>";
					echo "<td>".$row['policyno']."</td>";
					echo "<td>".$row['regno']."</td>";
					echo "<td>".$row['engineno']."</td>";
					echo "<td>".$row['purchasevalue']."</td>";
					echo "<td>".$row['make']."</td>";
					echo "<td>".$row['detail']."</td>";
					
					echo "</tr>";
					
					$cnt=$cnt+1;
				}
					echo "</table>";
            
	include("./include/footer.php");
?>
