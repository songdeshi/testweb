<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>添加学生</title>
</head>
<body>
	<h1>添加学生</h1>
	<form action="stuProcess.php" method="post">
		姓名&nbsp<input type="text" width="100px" name="name"><br/>
		班级&nbsp<input type="text" width="100px" name="class"><br/>
		成绩&nbsp<input type="text" width="100px" name="grade"><br/>
		电话&nbsp<input type="text" width="100px" name="telenum"><br/><br/>
		<input type="hidden" name="flag" value="addStu">
		<input type="submit" value="添加学生">
		<input type="reset" value="重新填写">


	</form>
	
</body>
</html>