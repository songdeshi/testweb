<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>在线词典</title>

	<script>
		 function choose (mode) {

		 	if(mode=='en'){
		 		enwords.style.display = 'block';
		 		cnwords.style.display = 'none';
		 		

		 	}else if(mode=='cn'){
		 		enwords.style.display = 'none';
		 		cnwords.style.display = 'block';
		 		
		 	}
		 	// body... 
		 }
	</script>
</head>
<body>
	<form action="trans.php" method="post">
		<input type="radio"   name="dede" value="1" onclick="choose('en')">英译汉
		<input type="radio"   name="dede" value="2" onclick="choose('cn')">汉译英<br/>
		请输入要查询的单词：
		<input type="text" name="enwords" id="enwords" style="width:100px ;height:50px ;display: block" ></input>

		<input type="text" name="cnwords" id="cnwords" style="width:100px ;height:50px ;display: none" ></input><br/>


		<input type="submit" value="查询"> </input>
	</form>
	
</body>
</html>