<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Responsive Admin Theme - ZONTAL</title>
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
                <i class="fa fa-user-plus login-icon" ></i>
        </div>
            </div>
        </div>
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">请填写登录信息： </h4>

                </div>

            </div>
            <div class="row">
                


                <div class="col-md-6">
                    <div class="alert alert-info">
                        <form role="form" action='newpassworddo.php' method='post'>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control"
                                    placeholder="在此输入原始密码" name='oldpassword' />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control"
                                    placeholder="在此输入新密码" name='password' />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control"
                                    placeholder="在此重复输入新密码" name='password1' />
                            </div>
                            <input type='submit' class="btn btn-primary " value='确认修改' />
                            </form>
                    </div>
                    <div class="alert alert-success">
                         <strong> Instructions To Use:</strong>
                        <ul>
                            <li>
                               Lorem ipsum dolor sit amet ipsum dolor sit ame
                            </li>
                            <li>
                                 Aamet ipsum dolor sit ame
                            </li>
                            <li>
                               Lorem ipsum dolor sit amet ipsum dolor
                            </li>
                            <li>
                                 Cpsum dolor sit ame
                            </li>
                        </ul>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
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
    <script>
    $(function(){
            $(".snow-canvas").snow();
        });
    </script>
</body>
</html>