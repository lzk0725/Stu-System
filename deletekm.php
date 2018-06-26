<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "delete from tb_km where id=$id";
//exit($sql);
if (mysql_query ( $sql )) {

	echo"<script>alert('删除成功！');location='km.php';</script>";
} else {
	echo"<script>alert('删除失败！！');location='km.php';</script>";
}