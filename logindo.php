<?php
header ( "content-type:text/html;charset=utf-8" );
if (! isset ( $_SESSION )) {
	session_start ();
}
if (isset ( $_SESSION ['userName'] )) {
	header ( "location:index.php" );
} elseif (! isset ( $_REQUEST ['username'] )) {
	header ( "location:login.php" );
} else {
	
    $yz = $_SESSION['yz'];
    $num = $_POST['input'];
   
   if($num==$yz){

	 $username = $_POST ['username'];
	$passcode = $_POST ['passcode'];
	
	//计算摘要
	$password2 = sha1 ( $passcode );
	
	require_once 'dbconfig.php';
	// 根据用户名和密码去查询帐号表
	$sql = "select * from tb_user where username= '$username' and password='$password2'";
	$result = mysql_query ( $sql, $conn );
	if ($row = mysql_fetch_array ( $result )) {
		$_SESSION ['userName'] = $username;
			echo"<script>alert('登录成功！');location='index.php';</script>";

	} else {
     	echo"<script>alert('用户名或密码错误!');location='login.php';</script>";

	}
   }else{
   
     	echo"<script>alert('验证码错误!');location='login.php';</script>"; 
     	  }
	
}
?>