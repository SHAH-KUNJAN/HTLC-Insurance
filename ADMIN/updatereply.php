<?
	include("./include/header.php");
	mysql_connect("localhost","root");
	
	$db=mysql_select_db('insurance');
	
	$id=$_REQUEST['id'];
	if(isset($_REQUEST['updatereply']))
	{
		//$q=$_REQUEST['chk'];
		$no=$_REQUEST['h1'];
		$pol=$_REQUEST['replyid'];
		$rep=$_REQUEST['reply'];
		$qid=$_REQUEST['queryid'];
		$qry=$_REQUEST['query'];
		$post=$_REQUEST['postedby'];
		//$det=$_REQUEST['detail'];
		//for($i=0;$i<=count($q);$i++)
		//{
			$q="UPDATE 'insurance'.'reply' SET 
				replyid='pol',
				reply='$rep',
				queryid='$qid',
				query='$qry',
				postedby='$post',
				WHERE no=$no" ;
				
				//UPDATE `insurance`.`reply` SET `reply` = 'sorry no help' WHERE `reply`.`replyid` =1 LIMIT 1 ;
					
			mysql_query($q);
			//die($q);
			header("location:replyad.php");
		//}
	}
	$qry="SELECT * FROM reply WHERE no='$id' ";
	$rs=mysql_query($qry);
	$rs1=mysql_fetch_array($rs);
?>
<center>
<table align="center"  vspace="150%" border="2">
<form method="post" action="updatereply.php">
<tr>
<td>REPLYID</td>
<td><input type="text" name="replyid" value="<? echo $rs1[1]; ?> "/></td>
</tr>

<tr>
<td>REPLY</td>
<td><input type="text" name="reply" value="<? echo $rs1[2]; ?> "/></td>
</tr>
<tr>
<td>QUERYID</td>
<td><input type="text" name="queryid" value="<? echo $rs1[3]; ?> "/></td>
</tr>
<tr>
<td>QUERY</td>
<td><input type="text" name="query" value="<? echo $rs1[4]; ?> "/></td>
</tr>
<tr>
<td>POSTEDBY</td>
<td><input type="text" name="postedby" value="<? echo $rs1[5]; ?> "/></td>
</tr>
<tr>
<tr>
<td colspan="2" align="center"><input type="hidden" name="h1" value="<? echo $rs1[0]; ?>" />

<input type="submit" value="UPDATE" name="updatereply">
</td>
</tr>
</form>
</center>
</table>
<?
	include("./include/footer.php");
?>