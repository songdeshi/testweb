<?php 
	require_once 'comfun.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>教师管理界面</title>
</head>
<body>
	<h1>
	<!-- <?php
	
	 $id=$_GET['id'];echo "欢迎，".$id; 
	?> -->
	 <?php 
	 	lastLogin();
	  ?>	
	 </h1>
	<a href="stuInfo.php?pageNow=1">管理学生</a><br/>
	<a href="addStu.php?flag=addStu">添加学生</a>

	 

	
</body>
</html>