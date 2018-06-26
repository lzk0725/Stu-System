<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['name'];
$className = $_REQUEST ['className'];
$birthday = $_REQUEST ['birthday'];
$sex = $_REQUEST ['sex'];

// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "update tb_student set xh ='$studentId',name = '$name',s_class = '$className',birthday = '$birthday',sex ='$sex' where id = $id";
if (mysql_query ( $sql )) {
	echo"<script>alert('修改成功');location='index.php';</script>";
} else {
	echo"<script>alert('修改失败！！！');location='index.php';</script>";
}

?>


