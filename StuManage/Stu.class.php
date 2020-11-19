<?php 
   class Stu{
   private $ID;
   private $name;
   private $grade;
   private $class;
   private $telenum;

   
   public function getID()
   {
       return $this->ID;
   }
   
   
   public function setID($value)
   {
       $this->ID = $value;
       
   }


   
   public function getname()
   {
       return $this->name;
   }
   
   
   public function setname($value)
   {
       $this->name = $value;
       
   }
   

   
   public function getgrade()
   {
       return $this->grade;
   }
   
   
   public function setgrade($value)
   {
       $this->grade = $value;
       
   }


   
   public function getclass()
   {
       return $this->class;
   }
   
   
   public function setclass($value)
   {
       $this->class = $value;
       
   }
   

   
   public function gettelenum()
   {
       return $this->telenum;
   }
   
   
   public function settelenum($value)
   {
       $this->telenum = $value;
       
   }
   
   
   
  }
 ?>