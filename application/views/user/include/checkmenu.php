<?php

error_reporting(0);
$pname=$_REQUEST["page"];


if(strcmp($pname,"serv")==0)
{
    $class7='active';
}
else if(strcmp($pname,"gall")==0)
{
    $class2='active';
}
else if(strcmp($pname,"about")==0)
{
    $class3='active';
}
else if(strcmp($pname,"faq")==0)
{
    $class4='active';
}
else if(strcmp($pname,"event")==0)
{
    $class5='active';
}
else if(strcmp($pname,"contact")==0)
{
    $class6='active';
}
else
{
	$class1='active';
}



?>
