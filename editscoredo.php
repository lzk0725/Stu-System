<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$subject = $_REQUEST ['subject'];
$mark = $_REQUEST ['mark'];


$sql = "update tb_score set xh ='$studentId',km = '$subject',cj = '$mark' where id = $id";
if (mysql_query ( $sql )) {
	
  	echo"<script>alert('修改成功，回到成绩页面');location='score.php';</script>";
	
} else {
		echo"<script>alert('修改失败，回到成绩页面');location='score.php';</script>";
}