<?php


$image_name=$_FILES['slider_image']['name'];
$image_name="photos/".$image_name;


$slider_title=$_POST['slider_title'];
$slider_details=$_POST['slider_details'];

$con=mysql_connect('localhost','root','') or die(mysql_error());
$db=mysql_select_db('db_asian',$con) or die(mysql_error());

$q="insert into tbl_slider (slider_title,slider_details,slider_image) values('$slider_title','$slider_details','$image_name')";
$result=mysql_query($q,$con) or die(mysql_error());

move_uploaded_file($_FILES['slider_image']['tmp_name'],$image_name);

echo "Success";
mysql_close($con);

?>