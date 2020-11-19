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

		public function fenyeStuInfo($pageNow,$pageSize)
		{
			$sql="select *from student limit ".($pageNow-1)*$pageSize.",$pageSize";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->go_sdl($sql);
			echo "<table border='solid'; width='700px' height='100px'>";
					
			echo "<tr><th>ID</th><th>姓名</th><th>班级</th><th>成绩</th><th>电话</th><th>删除学生</th><th>修改学生信息</th><tr/>";
			for ($i=0; $i < count($res) ; $i++) { 
				$arr=$res[$i];
			 	echo "<tr><td>$arr[ID]</td><td>$arr[name]</td><td>$arr[class]</td><td>$arr[grade]</td><td>$arr[telenum]</td><td><a href='stuProcess.php?flag=delStu&id=$arr[ID]'>删除学生<a/></td><td><a href='updStu.php?id=$arr[ID]'>修改学生信息<a/></td></tr>";
			 }
					
			
			echo "</table>";


		}
		public function addStu($name,$class,$grade,$telenum)
		{
			$sqlHelper=new SqlHelper();
			$sql="insert into student (name,class,grade,telenum)values('$name','$class',$grade,$telenum);";
			$res=$sqlHelper->go_mdl($sql);
			if ($res==1) {
				
				header("location:ok.php");# code...
			}else{
				echo "操作失败";
			}

		}
		public function delStuById($id)
		{
			$sqlHelper=new SqlHelper();
			$sql="delete from student where id=$id";
			$res=$sqlHelper->go_mdl($sql);
			if ($res==1) {
				
				header("location:ok.php");# code...
			}else{
				echo "操作失败";
			}
		}
		public function updStuByid($id)
		{
		   require_once 'Stu.class.php';
		   
		   $sql="select * from student where ID=$id";
		   $sqlHelper=new SqlHelper();
		   $arr=$sqlHelper->go_sdl($sql);
		   $stu=new Stu();
		   $stu->setID($arr[0]['ID']);
		   $stu->setname($arr[0]['name']);
		   $stu->setclass($arr[0]['class']);
		   $stu->setgrade($arr[0]['grade']);
		   $stu->settelenum($arr[0]['telenum']);
		   return $stu;

		}
		public function updStu($id,$name,$grade,$class,$telenum)
		{
			$sqlHelper=new SqlHelper();
			$sql="update student set name='$name',class='$class',grade=$grade,telenum=$telenum where id=$id";
			$res=$sqlHelper->go_mdl($sql);
			if ($res==1) {
				
				header("location:ok.php");# code...
			}elseif($res==2){
				echo "未修改任何信息"."<br/>"."<a href='updStu.php?id=$id'>返回重新修改<a/>";

			}else{
				echo $res."<br/>"."<a href='updStu.php?id=$id'>返回重新修改<a/>";;
			}

		}
		  
		
	}
 ?>