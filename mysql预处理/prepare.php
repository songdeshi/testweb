<?php 

     //创建链接
      $mysqli=new mysqli('localhost','root','','words');
      //检查链接
      if ($mysqli->connect_error) {
      	die('$mysqli->connect_error');
      	# code...
      }

     /* $sql="insert into words('en','cn') values('apple','苹果')";
      $res=$mysqli->query($sql);
      var_dump($res);
      */
      //创建一个预编译sql

      $prepare=$mysqli->prepare("INSERT INTO `words` ( `en` , `cn`  ) VALUES ( ? , ? ) ; ");
      //判断预编译成功与否
      
      if (!$prepare) {

      	echo $mysqli->error;
    
      	# code...
      }

      //绑定参数
      $prepare->bind_param("ss",$en,$cn);
      //为参数赋值
      $en="school";	
      $cn="学校";
      //执行
      $prepare->execute();















 ?>