<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script>
		function seljisuan(fangfa) {

			if (fangfa=='size') {
			
			sizediv.style.display='block';
			raddiv.style.display='none';


		}else if(fangfa=='rad') {

            sizediv.style.display='none';
			raddiv.style.display='block';

		}
	}
	
	</script>
</head>
<body>
	    
	<form action="catwork.php" method="post">
		<input type="radio" name="xuanze" value="aa" onclick="seljisuan('size')">四则运算
		<input type="radio" name="xuanze" value="bb" onclick="seljisuan('rad')">圆的面积计算

	<div style="display: block;" id="sizediv">
	
		
		
		
		请输入第一个数：<input type="text" name="num1"><br/><br/>
		请输入第二个数：<input type="text" name="num2"><br/><br/>
		请选择运算符   : <select style="width: 45px;" name="fuhao">

			                    <option value="+">+</option>
			                    <option value="-">-</option>
			                    <option value="*">*</option>
			                    <option value="/">/</option>
			
	
		             </select><br/>
		 开始计算：       <input type="submit"><br/><br/><br/>
		
		</div>

	
	  <div style="display: none;" id="raddiv">
	  	

		请输入半径：<input type="text" name="radius"><br/><br/>
		             
		 开始计算：       <input type="submit">
		

   	
   
   </div>
   </form>
	

</body>
</html>