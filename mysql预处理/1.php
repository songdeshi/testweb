<?php 
require_once 'prepare.class.php';
  $sql="SELECT id,cn FROM words WHERE en=? LIMIT 1";
 
   $preparesel=new prepare('localhost','root','','words');
   $preparesel->PrepareSel($sql,'dog');

 ?>