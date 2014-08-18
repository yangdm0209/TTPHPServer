<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
<head>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <script src="/js/jquery.js"></script>
</head>

<body>
<?php
    if(Yii::app()->controller->action->id != 'login'){
?>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/user/list">TT后台管理</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/user/list">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">用户管理<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/user/add">添加</a></li>
                            <li><a href="/user/list">列表</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">组织架构<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/depart/add">添加</a></li>
                            <li><a href="/depart/list">列表</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">群组管理<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/group/add">添加</a></li>
                            <li><a href="/group/list">列表</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">管理员管理<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/admin/add">修改</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">配置管理<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/config/add">修改</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php
                                echo Yii::app()->session['uname'];
                            ?>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/loginout">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
<?php
    }
?>
	<?php echo $content; ?>
</div><!-- page -->
</body>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
</html>