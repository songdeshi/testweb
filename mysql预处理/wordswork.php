<?php 
   require_once 'prepare.class.php';
 /* $words=$_POST['words'];
   if (!isset($words)) {

   	  	echo "请重新输入";
   	  	# code...
    }else{
    	if (strlen($words)==0) {
    		echo "请重新输入";
    		# code...
    	}
    }*/
           $prepare=new prepare('localhost','root','','words');
   /*  -----------增加 -------- 
       $sql="INSERT INTO `words` ( `en` , `cn`  ) VALUES ( ? , ? ) ; ";
           $prepare->PrepareZSG($sql,'orange','橘子');
   */
    /*  ---------更改 -------
        $sql="UPDATE words SET cn=? WHERE en=?";
            $prepare->PrepareZSG($sql,'男生','man');
    */
     /*  ---------删除--------   
     $sql="DELETE FROM words WHERE en=? AND cn=?";
        $prepare->PrepareZSG($sql,'school','学校');
     */

     





 ?>