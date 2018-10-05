<? session_start();
	include("./include/header.php");

	if($_POST["submit"])
	{
		mysql_connect('localhost','root');
		$db=mysql_select_db('insurance');
		$q1=$_POST['qur'];
		$q2=$_POST['u'];
		$q3=$_POST['date'];
		$q="INSERT INTO query (query,postedby,date) VALUES ('$q1','$q2','$q3')";
		mysql_query($q);
		//die($q);
		//header("location:adquery.php");

		/*INSERT INTO `query` (
		`queryid` ,
		`query` ,
		`postedby`
		)
		VALUES (
		NULL , 'hello hiii', 'kunjan'
		);*/
	}
?>
	
<body>
<form method="post" action="adquery.php">

    <table  align="center" height="70%" width="100%">
    
    <tr>
    <td align="left">
    <h2>USER</h2>
    </td>
    <td><h2><input type="text" name="u" maxlength="20" value="<? echo $_SESSION['aduser'] ?>" readonly ></h2>
    </td>
	</tr>
    
    <tr>
    <td align="left">
    <h2>DATE</h2>
    </td>
    <td><h3><input type="text" name="date" value="<? echo date('d-m-y'); ?>" readonly></h3>
     </td>
     </tr>
      <tr>
    <td align="left">
    <h2>TIME</h2>
    </td>
    <td><h3><input type="text" name="time" value="<? echo time('h:m:s'); ?>" readonly></h3>
     </td>
     </tr>
    
     <tr>
    <td>
	<h2>QUERY</h2>
	</td>
    <td><textarea rows="3" cols="80" name="qur"></textarea>
    </td>
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
</body>
<?
	include("./include/footer.php");
?>