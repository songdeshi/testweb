<?php 
    require_once 'prepare.class.php';
    if (isset($_POST['dede'])) {
        if ($_POST['dede']==1) {

              $en=$_POST['enwords'];
             if (!isset($en) ||strlen($en)==0) {

                 echo "请重新输入";
                 die();
        
            }else{ 
                    $sql="SELECT cn FROM words WHERE en=? LIMIT 1";
                    echo $en."的中文意思是";
                    $preparesel=new prepare('localhost','root','','words');
                    $preparesel->PrepareSel($sql,$en);
            }        
      }elseif ($_POST['dede']==2 ){

         $cn=$_POST['cnwords'];
         if (!isset($cn) ||strlen($cn)==0) {

                 echo "请重新输入";
                 die();
        # code...
      }else{
        $sql="SELECT en FROM words WHERE cn=? LIMIT 1";
        echo $cn."的中文意思是";
        $preparesel=new prepare('localhost','root','','words');
        $preparesel->PrepareSel($sql,$cn);

      }
    }
     
    
   
   }else{

    echo "未选择模式";
   }


 ?>