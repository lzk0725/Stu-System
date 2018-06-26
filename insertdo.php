<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['name'];
$className = $_REQUEST ['className'];
$birthday = $_REQUEST ['birthday'];
$sex = $_REQUEST ['sex'];

// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO tb_student(xh, name, s_class, birthday, sex) VALUES ( '$studentId', '$name', '$className','$birthday', '$sex')";
if (mysql_query ( $sql )) {

	echo"<script>alert('添加成功！');location='index.php';</script>";

} else {
	
	echo"<script>alert('添加失败！！');location='index.php';</script>";

}