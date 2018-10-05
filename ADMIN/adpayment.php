<?
	include("./include/header.php");

				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from receipt";
				$res=mysql_query($query,$con);
            	echo "<table border=2 align='center'  >";
				echo "<tr>";
					echo "<th> policyno </th>";
					echo "<th> receiptno </th>";
					echo "<th> receiptdate </th>";
					echo "<th> amtpaid </th>";
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
					echo "<td>".$row['policyno']."</td>";
					echo "<td>".$row['receiptno']."</td>";
					echo "<td>".$row['receiptdate']."</td>";
					echo "<td>".$row['amtpaid']."</td>";
					echo "</tr>";
					
					$cnt=$cnt+1;
				}
					echo "</table>";
            
	include("./include/footer.php");
?>
