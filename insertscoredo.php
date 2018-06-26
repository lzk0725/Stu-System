<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$studentId = $_REQUEST ['studentId'];
$km = $_REQUEST ['km'];
$cj = $_REQUEST ['cj'];

// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO tb_score(xh, km, cj) VALUES ( '$studentId', '$km', '$cj')";
if (mysql_query ( $sql )) {

	echo"<script>alert('添加成功！');location='score.php';</script>";

} else {
	
	echo"<script>alert('添加失败！！');location='score.php';</script>";

}