<?php 
	require_once 'SqlHelper.class.php';
	class StuService
	{	
		public function getPageAll($pageSize)
		{	
			$sql="select count(ID) from student";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->go_sdl($sql);
			$arr=$res[0];
			$countAll=$arr['count(ID)'];
			$pageAll=ceil($countAll/$pageSize);
			return $pageAll;
		}

		public function findStuInfo($pageNow,$pageSize)
		{
			$sql="select *from student limit ".($pageNow-1)*$pageSize.",$pageSize";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->go_sdl($sql);
			echo "<table border='solid'; width='700px' height='100px'>";
					
			echo "<tr><th>ID</th><th>姓名</th><th>班级</th><th>成绩</th><th>电话</th><tr/>";
			for ($i=0; $i < count($res) ; $i++) { 
				$arr=$res[$i];
			 	echo "<tr><td>$arr[ID]</td><td>$arr[name]</td><td>$arr[class]</td><td>$arr[grade]</td><td>$arr[telenum]</td></tr>";
			 }
					
			
			echo "</table>";

		}
	}
 ?>