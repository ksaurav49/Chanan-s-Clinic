<?php 
	
	$cat=$_REQUEST['category'];

	mysql_connect("localhost","root","");
	mysql_select_db("chanan");

	mysql_query("insert into category(cat_name) values('$cat')");

	if(mysql_affected_rows()>0)
	{
		header("location:../add_category.php?yes");
	}
	else
	{
		header("location:../add_category.php?no");
	}


?>