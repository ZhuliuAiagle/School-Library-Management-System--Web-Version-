<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="jQuery.js"></script>
    <script src="importbook.js"></script>
    <script src="redirection.js"></script>
    <title>新书入库-单侧入库</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">ZJU Library</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> 欢迎您！尊敬的管理员！&nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">登出</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/timg.jpg" class="user-image img-responsive"/>
                </li>


                <li>
                    <a href="index.php"> 库存查询</a>
                </li>
                <p style="color: #ffffff">  新书入库<span class="fa arrow"></span></p>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="importbook.php" class="active-menu">单册入库</a>
                    </li>
                    <li>
                        <a href="floodbook.php">批量入库</a>
                    </li>

                </ul>
                <li>
                    <a  href="newcard.php"> 借记卡注册</a>
                </li>
                <li  >
                    <a   href="chart.html"> 借记卡注销</a>
                </li>
                <li  >
                    <a  href="table.html"> 借阅记录</a>
                </li>
                <li  >
                    <a  href="borrowbook.html"> 借书业务</a>
                </li>
                <li  >
                    <a   href="returnbook.html"> 还书业务</a>
                </li>
                <li  >
                    <a   href="registeration.html"> 批量出货</a>
                </li>


                <li>
                    <a  href="blank.html"> 关于我们</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>单册入库服务</h2>
                    <h5>我们支持单册入库</h5>
                </div>
            </div>

        </div>
        <p>请输入书籍信息</p>
        <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control" id = "bno" placeholder="书籍编号 " />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control" id = "category" placeholder="书籍分类" />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control" id = "title" placeholder="书籍名称" />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control"  id = "press" placeholder="出版社" />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control"  id = "year" placeholder="出版年份" />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control"  id = "author" placeholder="作者 " />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control"  id = "price" placeholder="价格 " />
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control"  id = "total" placeholder="入库总数 " />
        </div>
        <div align = center style = "margin-bottom: 30px">
            <a class="btn btn-primary " id = "select" onclick="SingleImport()">一键入库</a>
        </div>


        <table class="table table-striped table-bordered table-hover" id="dataTables-example"></table>

        <!-- /. PAGE INNER  -->

        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- MORRIS CHART SCRIPTS -->
        <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
        <script src="assets/js/morris/morris.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>



</body>
</html>
