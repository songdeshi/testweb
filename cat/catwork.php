<?php 

  require_once 'Cat.class.php';

  $selected=$_POST['xuanze'];
  $cat1=new cat();
   if ($selected=='aa') {
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      $fuhao=$_POST['fuhao'];
    echo $cat1->szys($num1,$num2,$fuhao);
   	# code...
   }elseif ($selected=='bb') {

    $radius=$_POST['radius'];
   	echo $cat1->bjjs($radius);
 
   	# code...
   }

 ?>
  <a href="catview.php">再次计算</a>