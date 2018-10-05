<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from life";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center' >";
				echo "<tr>";	
					echo "<th> </th>";			
					echo "<th>  </th>";
					echo "<th> </th>";
					echo "<th> policyno </th>";
					echo "<th> lifecover </th>";
					echo "<th> premiumpay </th>";
					echo "<th> nomineeid </th>";
					echo "<th>  details </th>";
						echo "</tr>";
			//	$cnt=1;
			$i=0;
				while($row=mysql_fetch_array($res))
				{
	
				//	if($cnt==4)
				//	{
						//echo "</tr><tr>";
					//	$cnt=1;
				//	}
					echo "<tr>";
			
					echo "<td> <a href='updatelife.php?id=$row[0]'>UPDATE</a> </td>";
					echo "<td> <a href='insertlife.php?id=$row[0]'>INSERT</a> </td>";
					echo "<td> <a href='deletelife.php?id=$row[0]'>DELETE</a> </td>";
					//echo "<td>".$row['no']."</td>";
					echo "<td>".$row['policyno']."</td>";
					echo "<td>".$row['lifecover']."</td>";
					echo "<td>".$row['premiumpay']."</td>";
					echo "<td>".$row['nomineeid']."</td>";
					echo "<td>".$row['details']."</td>";
					
					echo "</tr>";
					
				//	$cnt=$cnt+1;
				}
				$i++;
					echo "</table>";
            
	include("./include/footer.php");
?>
