<?php 

     class prepare{
         public $localhost;
         public $user;
         public $passwd;
         public $db;
         public static $mysqli;

     
         public function __construct($host,$user,$passwd,$db){

          $this->host=$host;
          $this->user=$user;
          $this->passwd=$passwd;
          $this->db=$db;
           self::$mysqli=new mysqli($this->host,$this->user,$this->passwd,$this->db);
             //检查链接
              if (self::$mysqli->connect_error) {

             die('self::$mysqli->connect_error');
               }
        }

   
      //创建一个预编译sql
        public function PrepareZSG($sql,$en,$cn){

             //$sql="INSERT INTO `words` ( `en` , `cn`  ) VALUES ( ? , ? ) ; ";

             $prepare=self::$mysqli->prepare($sql);
              //判断预编译成功与否
      
            if (!$prepare) {

      	echo self::$mysqli->error;
    
      	# code...
            }

             //绑定参数
             $prepare->bind_param("ss",$en,$cn);
             //为数赋值参
             
            //执行
            $res=$prepare->execute();
            //判断执行结果
            if ($res) {

                  if (self::$mysqli->affected_rows>0) {
                    echo "操作成功，影响的行数为：".self::$mysqli->affected_rows;
                    # code...
                  }else{

                    echo  "操作成功，没有行受影响";
                  }

                          
                  }else{
              echo "操作失败".self::$mysqli->error;
            }
            //关闭数据库链接
            self::$mysqli->close();

     }
      public function PrepareSel($sql,$en){

             $prepare=self::$mysqli->prepare($sql);
              //判断预编译成功与否
      
            if (!$prepare) {

            echo $mysqli->error;
    
            # code...
            }

             //绑定参数
             $prepare->bind_param("s",$en);
             //执行查询
             $prepare->execute();
             $result=$prepare->get_result();
             
             while ($rows=$result->fetch_row()) {
              echo "<br/>";

               foreach ($rows as $key => $value) {

                echo $value;
                 # code...
               }
               # code...
             }
             //释放资源
             $result->free();
             //关闭数据库链接
            self::$mysqli->close();
             
            
               # code...
             
 


      }
}
?>