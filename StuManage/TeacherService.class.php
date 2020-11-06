<?php 
    require_once 'SqlHelper.class.php';
	class TeacherService
	{
		
		function  checkLogin($id,$password)
		{
			$sql="select password from teacher where id=$id";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->go_sdl($sql);
			$arr=$res[0];
			
			if (md5($password)==$arr['password']) {
				echo "登录成功";
				header("location:teacherManage.php");
				# code...
			}else{
				die('用户名或密码错误');
			}
		}
	}


 ?>