<?php 

	function loginCookie($key)
	{
		if (!empty($_COOKIE[$key])) {
			return $_COOKIE[$key];
		}else{
			return ;
		}
	}
	function lastLogin()
	{
		if(empty($_COOKIE['lastLogin'])){
			echo "您是首次登录";
			setcookie("lastLogin",date("Y-m-d H:i:s"),time()+3600);

		}else{
			echo "您上次登录时间是".$_COOKIE['lastLogin'];
			setcookie("lastLogin",date("Y-m-d H:i:s"),time()+3600);
		}

	}
 ?>