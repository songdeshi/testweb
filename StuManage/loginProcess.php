<?php 
  require_once 'TeacherService.class.php';
  $id=$_POST['id'];
  $password=$_POST['password'];
 /* if (empty($_POST['remID'])) {
  	 if($_COOKIE['ID']){
  	 setcookie("ID","",time()-20);
  	}
  }else{
  	setcookie("ID",$_POST['id'],time()+3600);
  }*/

  $teacherService=new TeacherService();
  $teacherService->checkLogin($id,$password);

  


 ?>