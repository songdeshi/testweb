<?php 
 header("Expries:-1");
 header("Cache-Control:nocache");
 header("Pragma:nocache");

 

 header("Content-Type:text/html;charset=utf-8");
 require_once 'FileDown.class.php';

 $file_name=$_GET['file_name'];
 $file_path=$_GET['file_path'];

 $down_load=new download($file_name,$file_path);



 ?>