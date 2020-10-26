


<?php //两个防盗链案例
       //--1、运用$_SERVER['HTTP_REFERER']判断是不是从本网站打开网页
       //--2、运用$_SERVER['REMOTE_ADDR'] 判断访问本网页的Ip是不是合法


//获取referer --引导用户代理到当前页的前一页的地址
 //判断其是不是以http://www.dede.com开头
 /*if (isset($_SERVER['HTTP_REFERER'])) {
 	if (strpos($_SERVER['HTTP_REFERER'], "http://www.dede.com")==0) {
 		echo "你是合法的<br/>";
 	}else {echo "你是非法盗链者";exit();
      }
 	
 }else {echo "你是非法盗链者";exit();
}

require_once 'Student.class.php';

$stu1=new Student("豆豆");
$stu1->stu_join();
$stu2=new Student("奔奔");
$stu2->stu_join();
Student::getNums();
*/

//判断'REMOTE_ADDR'--浏览当前页面的用户的 IP 地址。
 //判断其是不是以http://www.dede.com开头
 if (isset($_SERVER['REMOTE_ADDR'])) {
 	if ($_SERVER['REMOTE_ADDR']=="192.168.0.10"){
 		echo "你的ip".$_SERVER['REMOTE_ADDR']."是合法的<br/>";
 	}else {echo "你的ip".$_SERVER['REMOTE_ADDR']."不是合法的<br/>";exit();
      }
 	
 }else {echo "你的ip".$_SERVER['REMOTE_ADDR']."不是合法的<br/>";exit();
}

require_once 'Student.class.php';

$stu1=new Student("豆豆");
$stu1->stu_join();
$stu2=new Student("奔奔");
$stu2->stu_join();
Student::getNums();








 ?>