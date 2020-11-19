<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>修改学生信息</title>
</head>
<?php 
	require_once 'StuService.class.php';
	$id=$_GET['id'];
	$stuService=new StuService();
	$stu=$stuService->updStuByid($id);

 ?>
<body>
	<h1>修改学生信息</h1>
	<form action="stuProcess.php" method="post">
		ID&nbsp<input readonly="readonly" width="100px" name="ID" value="<?php echo $stu->getID(); ?>"><br/>
		姓名&nbsp<input type="text" width="100px" name="name" value="<?php echo $stu->getname(); ?>"><br/>
		班级&nbsp<input type="text" width="100px" name="class" value="<?php echo $stu->getclass(); ?>"><br/>
		成绩&nbsp<input type="text" width="100px" name="grade" value="<?php echo $stu->getgrade(); ?>"><br/>
		电话&nbsp<input type="text" width="100px" name="telenum" value="<?php echo $stu->gettelenum(); ?>"><br/><br/>
		<input type="hidden" name="flag" value="updStu">
		<input type="submit" value="完成">
		<input type="reset" value="重新填写">


	</form>
	
</body>
</html>