<?php
       require_once 'StuService.class.php';
       $pageNow=$_GET['pageNow'];
       $pageSize=2;

       $stuService=new StuService();
       $stuService->findStuInfo($pageNow,$pageSize);
       $pageAll=$stuService->getPageAll($pageSize);


      for ($i=1; $i <= $pageAll; $i++) { 
         echo "<a href='stuinfo.php?pageNow=$i'>$i</a>&nbsp&nbsp&nbsp";
      }
?>

     
      

           
      
    
       
     
 