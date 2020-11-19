<?php
       require_once 'StuService.class.php';
       require_once 'NaviGate.class.php';
       $pageNow=$_GET['pageNow'];
       $pageSize=10;
       $naviSize=5;

       $stuService=new StuService();
       $stuService->fenyeStuInfo($pageNow,$pageSize);
       $pageAll=$stuService->getPageAll($pageSize);
       //引入导航
       $naviGate=new NaviGate();
       $naviGate->navGate("./stuinfo.php",$pageNow,$naviSize,$pageAll);


?>

     
      

           
      
    
       
     
 