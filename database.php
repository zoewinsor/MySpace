<?php
/*******------------数据库连接---------------*******/	
	$con = mysql_connect("localhost", "root", "root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	$db_selected = mysql_select_db("resume_contact", $con);
	
	if (!$db_selected)
	  {
	  die ("Can\'t use test_db : " . mysql_error());
	  }
/*******------------数据提交模块---------------*******/	
	$sql="INSERT INTO people (name, number, message, subtime)VALUES('$_POST[name]','$_POST[number]','$_POST[message]','$_POST[bmtime]')";
	
	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }	  
	mysql_close($con);
    Header("Location:index.html");
?>

