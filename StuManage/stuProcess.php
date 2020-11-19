<?php 
	require_once 'StuService.class.php';
	$flag=$_REQUEST['flag'];
	
    if ($flag=="addStu") {
    	$name=$_POST['name'];
    	$grade=$_POST['grade'];
    	$class=$_POST['class'];
    	$telenum=$_POST['telenum'];
    	$stuService=new StuService();
   	  $stuService->addStu($name,$class,$grade,$telenum);
    
    }elseif ($flag=="delStu") {
    	$id=$_GET['id'];
    	$stuService=new StuService();
    	$stuService->delStuById($id);

    }elseif ($flag=="updStu") {
        $id=$_POST['ID'];
    	$name=$_POST['name'];
        $grade=$_POST['grade'];
        $class=$_POST['class'];
        $telenum=$_POST['telenum'];
    	$stuService=new StuService();
    	$stuService->updStu($id,$name,$grade,$class,$telenum);
    }

    

 ?>