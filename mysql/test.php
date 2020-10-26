<?php 
/*     $conn=mysqli_connect('127.0.0.1','root','');
          if ($conn) {

	            echo "连接成功";
	           # code...
          }
          //显示版本号
         echo  mysqli_get_server_version($conn);
*/
 /*         $conn=new mysqli('127.0.0.1','root','');

                if ($conn->connect_error) {

                	die('cuole');
                	# code...
                }
         $result=$conn->query("show databases");
         echo $result->num_rows;
         $result->free();
*/  
          $mysqli=new mysqli('localhost','root','','dede');
          $sql="insert into chengji(name,grades,age) VAlUES ('狗币',50,28)";
          $res=$mysqli->query($sql);
          echo  $mysqli->affected_rows;
       
 ?>