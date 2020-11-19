<?php 
    require_once 'SqlHelper.class.php';
	class TeacherService
	{
		
		function  checkLogin($id,$password)
		{
			$sql="select password from teacher where id=$id";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->go_sdl($sql);
			
			if ($res) {
				
				if (md5($password)==$res[0]['password']) {
					echo "登录成功";
					header("location:teacherManage.php?id=$id");
				}else{

					echo "用户名或密码错误";
				}
			
			}else{
				echo "用户名或密码错误";
			}
		}
	}


 ?>