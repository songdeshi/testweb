<?php 

  $tz=new DateTimeZone('Asia/Shanghai');

 $sj=new DateTime();
 $sj->SetTimezone($tz);


  function wjbz($errno,$errmes){

   echo "出大事了！<br/>".$errno."<br/>";
  }

 


 set_error_handler("wjbz",E_USER_NOTICE);


  if (!file_exists("aaa.txt")) {
  	
  	trigger_error("文件不在！",E_USER_NOTICE);
  	echo $sj->format('Y-m-d H:i:s')."<br/>";
  	 
  }
  echo "ok";

 
 





 ?>