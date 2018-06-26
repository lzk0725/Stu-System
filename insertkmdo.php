<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据

$km = $_REQUEST ['km'];
$teachar = $_REQUEST ['teachar'];

// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO tb_km(km, teachar) VALUES ('$km', '$teachar')";
if (mysql_query ( $sql )) {
	echo"<script>alert('添加成功！');location='km.php';</script>";
} else {
	echo"<script>alert('添加成功！');location='km.php';</script>";
}