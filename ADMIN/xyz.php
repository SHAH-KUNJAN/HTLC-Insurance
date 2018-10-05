<?
				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("insurance",$con);
				$query="select * from image";
				$res=mysql_query($query);
				echo "<table>";
				while($data=mysql_fetch_array($res))
				{
					echo "<tr><td>";
					echo "<img src='$data[0]' height='50' width='50'></img>";
					echo "</td></tr>";
				}
				echo "</table>";
			?>