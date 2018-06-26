<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script>
    function show(){
     var img = document.getElementById("img");
     img.src = "code.php?id="+Math.random();

	}
</script>
</head>

<body>
<form action="" method="post">
请输入验证码：<input type="text" name="input" />
<img src="code.php" onclick="show()" id = "img" /><br/>

<input type="submit" value="确认" name="sub"/>
</form>
<?php
if(isset($_POST['sub'])){
   session_start();
   $yz = $_SESSION['yz'];
    $num = $_POST['input'];
   
   if($num==$yz){
	   echo "验证成功";
   }else{
   
   echo"验证失败";
   }

}
?>
</body>
</html>
