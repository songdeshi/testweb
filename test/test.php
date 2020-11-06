<?php  
		require_once 'Test.class.php';
		$dede=new dede();
		
	   /* function test(&$dede)
		{
			$dede=4;
			echo $dede;# code...
		}	


		test($dede);
		echo "<br/>".$dede;*/
		function test($dede)	
		{
			$dede->dede=4;
		}
		test($dede);
		echo $dede->dede;

 ?>		