<?php 
   class download{


   	public $file_name;
   	public $file_path;


   	public function __construct($file_name,$file_path){

   		


   		if (!file_exists($file_path.$file_name)) {

   			echo "此文件不存在";
   			return;
   			# code...
   		}
   		$fp=fopen($file_path.$file_name, "r");
   		$file_size=filesize($file_path.$file_name);

   		header("Content-type:application/octet-stream");
   		header("Accept-Ranges:bytes");
   		header("Accept-Length:$file_size");
   		header("Content-Disposition:attachment;filename=".$file_name);

   		$buffer=1024;
   		while (!feof($fp)) {

   			$file_data=fread($fp, $buffer);
   			echo $file_data;
   			


   			# code...
   		}

   		fclose($fp);



   		# code...
   	}




   }




 ?>