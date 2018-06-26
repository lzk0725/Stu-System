<?php
<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
// 取SESSION数据
$username = $_SESSION ['userName'];
// 取表单数据
$oldpassword = sha1 ( $_REQUEST ['oldpassword'] );
$password = sha1 ( $_REQUEST ['password'] );
$password2 = sha1 ( $_REQUEST ['password2'] );
// 新密码是否一致
if ($password != $password2) {

   	echo"<script>alert('两次密码不一致！!');location='newpassword.php';</script>";


} else {
	// sql语句中字符串数据类型都要加引号，数字字段随便
	$sql = "select * from tb_user where username='$username' and password='$oldpassword'";
	// exit($sql);
	$result = mysql_query ( $sql );
	if ($row = mysql_fetch_array($result)) {
		//修改密码
		$id = $row['id'];
		$query = "update tb_user set password = '$password' where id =$id";
		if(mysql_query($query)){

	    	echo"<script>alert('密码修改成功!，请重新登陆');location='login.php';</script>";

		}else{

	     	echo"<script>alert('密码修改失败！！！!');location='newpassword.php';</script>";

		}
	} else {
		   	echo"<script>alert('原密码错误!');location='newpassword.php';</script>";

	}
}