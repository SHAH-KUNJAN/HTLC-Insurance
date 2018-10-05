<? session_start();
	include("./include/header.php");

	mysql_connect('localhost','root');
	$db=mysql_select_db('insurance');
	if($_POST["submit"])
	{
		
		//$q1=$_POST['qur'];
//		$q2=$_POST['u'];
	//	$q3=$_POST['date'];
		$q4=$_POST['rep'];
		$q5=$_POST['qi'];
		$q="UPDATE query SET 
				reply='$q4'
				WHERE queryid=$q5 " ;
				
	//	$q="INSERT INTO reply (replyby,reply,queryid,query,postedby,date) VALUES ('admin','$q4','$q5','$q1','$q2','$q3')";
		mysql_query($q);
		//die($q);
		
	}
	$p="select * from  query WHERE reply=' '";
	$res=mysql_query($p);
	
?>
	
<body>
<?
while($row=mysql_fetch_array($res))
{
?>
<form method="get" action="adreply.php">
<table  align="center" height="70%" width="100%">

     <tr>
    <td align="left">
    <h2>QUERY ID</h2>
    </td>
    <td><h2><input type="text" name="qi" maxlength="20" value="<? echo $row['queryid'] ?>" readonly ></h2>
    </td>
	</tr> 
    <tr>
    <td align="left">
    <h2>USER</h2>
    </td>
    <td><h2><input type="text" name="u" maxlength="20" value="<? echo $_SESSION['user'] ?>" readonly ></h2>
    </td>
	</tr>
    
    <tr>
    <td align="left">
    <h2>DATE</h2>
    </td>
    <td><h3><input type="text" name="date" value="<? echo date('y-m-d'); ?>" readonly></h3>
     </td>
     </tr>
   <!--    <tr>
    <td align="left">
   <h2>TIME</h2>
    </td>
    <td><h3><input type="text" name="time" value="<? echo time('h:m:s'); ?>" readonly></h3>
     </td>
     </tr>
    -->
     <tr>
    <td>
	<h2>QUERY</h2>
	</td>
    <td><textarea rows="3" cols="80" name="qur" ><? echo $row['query'] ?></textarea>
   <!-- <input type="text" name="qur" value=""  readonly="readonly" />-->
    </td>
    </tr>
    
     <tr>
    <td>
	<h2>REPLY</h2>
	</td>
     <td><textarea rows="3" cols="80" name="rep" ></textarea></td>
     </tr>
    
    <tr>
    <td  align="right">
    <input type="submit"  name="submit" value="SEND"  />
    </td>
    <td  align="left">
    <input type="reset"  value="CANCEL" />
    </td>
    </tr>
    </table>
</form>

    <? } ?>
</body>
<?
	include("./include/footer.php");
?>