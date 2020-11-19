<?php 
    class stu
    {
    	public $a;  
    	public $b;

    	public function get($name)
    	{
    	    return $this->$name;
    	}
    	
    	
    	public function set($name,$value)
    	{
    	    $this->$name = $value;
    	   
    	}
    	
    }
    $aaa=new stu();
   $aaa->set("a",234);
   $aaa->get("a");
   echo $aaa->a;

   

 ?>