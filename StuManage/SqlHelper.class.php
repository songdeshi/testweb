<?php
	class SqlHelper
	{
		public $conn;
		public $host="localhost";
		public $user="root";
		public $password="";
		public $db="stumanage";

		public function __construct()
		{
			$this->conn=new mysqli($this->host,$this->user,$this->password,$this->db);
				if (!$this->conn){		 
				
					die('$this->conn->connect_error');
				}

		}

		public function go_mdl($sql)

		{
			if ($res=$this->conn->query($sql)){
				if ($this->conn->affected_rows == 0) {
					//操作成功但是没有行受影响
					return 2;# code...
				}else{
					//操作成功
					return 1;
				}
			}else{
				//查询失败
				return $this->conn->error;
			}
		}

		 public function go_sdl($sql)
		{
			if (!$res=$this->conn->query($sql)){
				die($this->conn->error);
			}	

			  $arr=array();
			  $i=0;
				while ($rows=$res->fetch_assoc()) {
				 	$arr[$i++]=$rows;
				 	

				}
				return $arr;
				$res->free();
				$this->conn->close();

		}		
		
	} 
 ?>