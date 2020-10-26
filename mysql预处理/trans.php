<?php 
    require_once 'prepare.class.php';
    $en=$_POST['words'];
   if (!isset($en)) {

   	  	echo "请重新输入";
   	  	# code...
    }else{
    	if (strlen($en)==0) {
    		echo "请重新输入";
    		# code...
    	}
    }
    $sql="SELECT cn FROM words WHERE en=? LIMIT 1";

    echo $en."的中文意思是";
 
   $preparesel=new prepare('localhost','root','','words');
   $preparesel->PrepareSel($sql,$en);


 ?>