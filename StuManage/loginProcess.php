<?php 
  require_once 'TeacherService.class.php';
  $id=$_POST['id'];
  $password=$_POST['password'];

  $teacherService=new TeacherService();
  $teacherService->checkLogin($id,$password);

  


 ?>