<?php
header ( "Content-type: text/html; charset=UTF-8" ); //设置文件编码格式
if(isset($_GET['sel'])){	
	require_once 'jpgraph/jpgraph.php';     //导入Jpgraph类库
	require_once 'jpgraph/jpgraph_bar.php';     //导入Jpgraph类库的柱状图功能
    $km = $_GET['sel'];
	include('dbconfig.php');
	$sql = 'select * from tb_score where km="'.$km.'"';
	
	$r = mysql_query($sql);
	while($row = mysql_fetch_array($r)){
		$datas[] = $row['xh'];
		$data[] = $row['cj'];
	}
	


	$graph = new Graph(600, 300);     //设置画布大小
	$graph->SetScale('textlin');     //设置坐标刻度类型
	$graph->SetShadow();    //设置画布阴影

	$graph->img->SetMargin(40, 30, 20, 40);    //设置统计图边距
	$barplot = new BarPlot($data);    //实例化BarPlat对象

	$graph->Add($barplot);
	$barplot->value->Show();
	$graph->title->Set(iconv("utf-8","gb2312","$km".'成绩'));     //设置统计图标题
	$graph->xaxis->title->Set(iconv("utf-8","gb2312","学号"));     //设置X轴名称
	$graph->xaxis->SetTickLabels($datas);

	$graph->yaxis->title->Set(iconv("utf-8","gb2312",'成绩(百分制)'));     //设置y轴名称
	$graph->title->SetFont(FF_SIMSUN, FS_BOLD);     //设置标题字体
	$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);    //设置X轴字体
	$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);    //设置Y轴字体
	$graph->Stroke();     //输出图像
}
