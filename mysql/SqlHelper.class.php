<?php 

      class SqlHelper{
      	 private static $conn;
      	 private static $localhost="localhost";
      	 private static $user="root";
       	 private static $pwd="";
      	 private static $db="dede";

         public function __construct(){
               //链接数据库
             self::$conn=new mysqli(self::$localhost,self::$user,self::$pwd,self::$db);

                //、、判断是否链接

              if (self::$conn->connect_error) {

      	              die("链接失败".self::$conn->connect_error);
              }
        }

      //执行增删改查
      //1.执行增删改，不返回result
        function zsg($sql){

        	
      
             $res=self::$conn->query($sql);


                if ($res) {
                	echo "操作成功,影响的行数为:".self::$conn->affected_rows;
                	# code...
                }else{

                	echo "操作失败";

                }


        
        } 

        function cx($sql){


        	   $res=self::$conn->query($sql);

        	   while ($rows=$res->fetch_row()) {

        	   	        echo "<br/>";

                     foreach ($rows as $key => $value) {

                     	echo "--$value";                      	# code...
                      } # code...
        	   }
        	   $res->free();

        }

    }

 ?>