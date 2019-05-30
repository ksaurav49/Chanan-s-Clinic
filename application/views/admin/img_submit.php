<?php

	$img_name=$_REQUEST['img_name'];
	$class=$_REQUEST['class'];
	$descr=$_REQUEST['descr'];

	$img = $_FILES['img']['name'];

	 $tmpimg = $_FILES['img']['tmp_name'];

	  $ran=rand();
		$img=$ran.$img;
	
		mysql_connect("localhost","root","");
	mysql_select_db("chanan");


		mysql_query("INSERT INTO gall(imgname,class,descri,img) VALUES('$img_name','$class','$descr','$img')");
                     
                     
                    if(mysql_affected_rows()>0)
                    {
                        move_uploaded_file($tmpimg, "../../../chanan's/doctor/wp-content/uploads/2017/03/".$img);
                        header("location:../gallery.php?sucess");
                    }
                    else
                    {
                        header("location:../gallery.php?error=2");
                    }
 

?>