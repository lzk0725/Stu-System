
<?php
	include('dbconfig.php');
	$sql = 'select distinct(km) from tb_score';
	$r = mysql_query($sql);
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>学生信息管理系统</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<style type="text/css">
 .snow-canvas {
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: fixed;
    pointer-events: none;
  }</style>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>1004511748@qq.com
                    &nbsp;&nbsp;
                    <strong>tel: </strong>13544278443
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h2>学生信息管理</h2>
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <div class="media-body">
                                        <h5><strong>使用人：</strong></h5>
                                        <h4 class="media-heading"><?=$userName?></h4>
                                    </div>
                                </div>
                                <hr />
                                <h5><strong>个性签名: </strong></h5>
                                Happy every day.
                                <hr />
                                <a href="newpassword.php" class="btn btn-info btn-sm">修改</a>&nbsp; <a href="loginout.php" class="btn btn-danger btn-sm">退出</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="index.php">学生信息</a></li>
                            <li><a href="score.php">成绩信息</a></li>
                            <li><a class="menu-top-active" href="km.php">科目信息</a></li>
                            <li><a href="login.php"> 登录 </a></li>
                            <li><a href="register.php"> 注册 </a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">学生成绩信息</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                <!-- Advanced Tables -->
<form action="kmdo.php" method="post">
    请选择要查询成绩的科目：
	<select name="sel">
      <?php
	  		while($row = mysql_fetch_array($r)){
				echo '<option value="'.$row['km'].'">';
				echo $row['km'];
				echo '</option>';
			}
	  ?>
    		
    </select>
    <input type="submit" value="查询" name="sub"/>
</form>
<?php
	if(isset($_POST['sub'])){
		echo "<img src='kmdodo.php?sel=".$_POST["sel"]."' />";
	}
?>

				<!--End Advanced Tables -->
			</div>
                    </div>
                </div>

            </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 YourCompany | By DesignBootstrap-More Templates <a href="http://www.baidu.com/" target="_blank" title="">学生信息管理系统</a> - Collect from <a href="http://www.baidu.com/" title="学生信息管理系统" target="_blank">学生信息管理系统</a>
                </div>

            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/snow-plugin.js"></script>
    <div class="htmleaf-container">
        
        <div class="htmleaf-content">
            <canvas class="snow-canvas" speed="1" interaction="false" size="2" count="80" opacity="0.00001" start-color="rgba(253,252,251,1)" end-color="rgba(251,252,253,0.3)" wind-power="0" image="false" width="1366" height="667"></canvas>
            <canvas class="snow-canvas" speed="3" interaction="true" size="6" count="30" start-color="rgba(253,252,251,1)" end-color="rgba(251,252,253,0.3)" opacity="0.00001" wind-power="2" image="false" width="1366" height="667"></canvas>
            <canvas class="snow-canvas" speed="3" interaction="true" size="12" count="20" wind-power="-5" image="assets/img/snow.png" width="1366" height="667"></canvas>
        </div>
        
    </div>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
        $(function(){
            $(".snow-canvas").snow();
        });

    </script>
</body>
</html>
