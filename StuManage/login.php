<?php 
	require_once 'comfun.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>教师登录</title>
</head>
<body>
	<form action="loginProcess.php" method="post">
		<h1>学生管理系统登录</h1>
		教师ID：<input type="text" name="id" value="
		<?php echo loginCookie("ID") ?>"><br/>

		密码  ：<input type="password" name="password"><br/>
		记住用户名<input type="checkbox" name="remID" value="rem"><br/>
		<input type="submit" value="登录">
		<input type="reset" value="重填">


	</form>
	
</body>
</html>