<?php 
   class NaviGate
   {

   		public function navGate($pageName,$pageNow,$naviSize,$pageAll)
		{
			$pageLast=$pageNow-1;
			$pageNext=$pageNow+1;
			if ($pageLast>0) {
				echo "<a href='$pageName?pageNow=$pageLast'>上一页<a/>&nbsp";
				# code...
			}
			
			if ($pageNow-$naviSize>0) {
						
				for ($i=$pageNow-$naviSize; $i <= $pageNow+$naviSize & $i<=$pageAll; $i++) { 
				echo "<a href='$pageName?pageNow=$i'>$i<a/>&nbsp&nbsp";
				}
			}else{
				for ($i=1; $i <= $pageNow+$naviSize & $i<=$pageAll; $i++) { 
				echo "<a href='$pageName?pageNow=$i'>$i<a/>&nbsp&nbsp";
				}
			}	
			if ($pageNext<=$pageAll) {
				echo "<a href='$pageName?pageNow=$pageNext'>下一页<a/>"."<br/>";
			}
			
			echo "第$pageNow/$pageAll"."页"."<br/>";
			echo "跳转到"."
				  <form action='$pageName'>
			      <input type='text' name='pageNow' value='$pageNow'>页
			      <input type='submit' value='GO'>
			      <form/>";
			
		}
   }
 ?>