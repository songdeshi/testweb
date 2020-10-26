<?php 

     class Student{
     	 public static $name;

         public static $nums;


         function __construct($name){
            self::$name=$name;
            self::$nums+=1;  
          
         	    
        }
        function stu_join(){
            echo self::$name."加入了<br/>";
        }
        static function getNums(){
               echo "现在有".self::$nums."人了<br/>";      
        }   

   }

 ?>