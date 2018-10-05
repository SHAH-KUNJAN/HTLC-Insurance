<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from policy";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center' >";
					echo "<tr>";
					echo "<th>  </th>";
					echo "<th>  </th>";
					echo "<th>  </th>";
					echo "<th> policyno </th>";
					echo "<th> policyid </th>";
					echo "<th>  custid </th>";
					echo "<th> type </th>";
					echo "<th> purdate </th>";
					echo "<th> premium </th>";
					echo "<th> frequency</th>";
					echo "<th> policystdate </th>";
					echo "<th> policyeddate </th>";
					echo "<th> nextpremiumdt </th>";
					echo "<th> approved </th>";
					echo "<th> nomineeid </th>";
										
				echo "</tr>";
				//$cnt=1;
				$i=0;
				while($row=mysql_fetch_array($res))
				{
	
				//	if($cnt==4)
				//	{
						//echo "</tr><tr>";
					//	$cnt=1;
				//	}
					echo "<tr>";
					echo "<td> <a href='update6.php?id=$row[0]'>UPDATE</a> </td>";
					echo "<td> <a href='deletepolicy.php?id=$row[0]'>DELETE</a> </td>";
					//echo "<td>".$row['no']."</td>";
					echo "<td>".$row['policyno']."</td>";
					echo "<td>".$row['policyid']."</td>";
					echo "<td>".$row['custid']."</td>";
					echo "<td>".$row['type']."</td>";
					echo "<td>".$row['purdate']."</td>";
					echo "<td>".$row['premium']."</td>";
					echo "<td>".$row['frequency']."</td>";
					echo "<td>".$row['policystdate']."</td>";
					echo "<td>".$row['policyeddate']."</td>";
					echo "<td>".$row['nextpremiumdt']."</td>";
					echo "<td>".$row['approved']."</td>";
					echo "<td>".$row['nomineeid']."</td>";
					
					echo "</tr>";
					
					//$cnt=$cnt+1;
				}
				$i++;
					echo "</table>";
            
	include("./include/footer.php");
?>
