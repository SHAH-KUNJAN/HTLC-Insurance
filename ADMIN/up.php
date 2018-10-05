<?php
	mysql_connect('localhost','root');
	
	$db=mysql_select_db('insurance');
	
	move_uploaded_file($_FILES["fle"]["tmp_name"],"../images/".$_FILES["fle"]["name"]);
	
	$p="../images/".$_FILES['fle']['name'];
	$q="INSERT INTO image VALUES('$p')";
	
		mysql_query($q);
		die($q);

?>
