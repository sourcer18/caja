<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language;?>" lang="<?php echo Yii::app()->language;?>" dir="ltr">
  <head profile="http://gmpg.org/xfn/11">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset;?>" />
  <meta http-equiv="imagetoolbar" content="no" />
  <!--<link rel="stylesheet" href="<?php //echo Yii::app()->theme->baseUrl; ?>/css/layout.css" type="text/css" />-->
  <meta charset="UTF-8">
        <title>Cybox | Panel Principal</title>


        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php
            $cs        = Yii::app()->clientScript;
            $themePath = Yii::app()->theme->baseUrl;

            /**
             * StyleSHeets
             */
            $cs->registerCssFile($themePath . '/assets/css/bootstrap.css');
            $cs->registerCssFile($themePath . '/assets/css/bootstrap-theme.css');

            /**
             * JavaScripts
             */
            $cs->registerCoreScript('jquery', CClientScript::POS_END);
            $cs->registerCoreScript('jquery.ui', CClientScript::POS_END);
            $cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
            $cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
        ?>
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            
            <script src="<?php echo Yii::app()->theme->baseUrl . '/assets/js/html5shiv.js';?>">
            </script>
            <script src="<?php echo Yii::app()->theme->baseUrl . '/assets/js/respond.min.js';?>">
            </script>

        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <script>

          function _(el){
            return document.getElementById(el);
          }
          function uploadFile(){
            var file = _("file1").files[0];
            var descripcion=document.getElementById("descripcion").value;
            var formdata = new FormData();
            formdata.append("file1", file);
            formdata.append("descripcion", descripcion);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "<?php echo Yii::app()->theme->baseUrl; ?>/file_upload_parser.php");
            ajax.send(formdata);
            
          }
          
          function progressHandler(event){
            _("loaded_n_total").innerHTML = "Subido "+event.loaded+" bytes de "+event.total;
            var percent = (event.loaded / event.total) * 100;
            _("progressBar").value = Math.round(percent);
            _("status").innerHTML = Math.round(percent)+"% subiendo... porfavor espere";
          }
          function completeHandler(event){
            _("status").innerHTML = event.target.responseText;
            _("progressBar").value = 0;
          }
          function errorHandler(event){
            _("status").innerHTML = "Subida fallida";
          }
          function abortHandler(event){
            _("status").innerHTML = "Subida abortada";
          }
      </script>
</head>
  <body class="skin-blue">
        
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                CYBOX
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Tienes 4 mensajes</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php $email = Yii::app()->user->name;
                            echo $email; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php $email = Yii::app()->user->name;
                            echo $email; ?>
                                        <small>Registrado desde 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Seguidores</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Perfil</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Amigos</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php if(!Yii::app()->user->isGuest){echo Yii::app()->user->ui->editProfileUrl;} ?>" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo Yii::app()->user->ui->logoutUrl?>" class="btn btn-default btn-flat">Desconectar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Bienvenido, <?php $nombre = Yii::app()->user->name;
                            echo $nombre; ?></p>
                            
                            <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        
                        <li class="treeview">
                            <a href="http://localhost:8888/cyboxgit/caja/site/index.html"><i class="fa fa-home"></i><span>Inicio</span></a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>Crear Nuevo</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://localhost:8888/cyboxgit/caja/archivo1/create.html"><i class="fa fa-angle-double-right"></i><i class="fa fa-cloud-upload"></i> Archivo</a></li>
                                <li><a href="http://localhost:8888/cyboxgit/caja/carpeta/create.php"><i class="fa fa-angle-double-right"></i><i class="fa fa-folder-open"></i> Carpeta</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="index.html"><i class="fa fa-bar-chart-o"></i> <span>Ver estadisticas</span></a>
                        </li>
                        <li class="treeview">
                            <a href="<?php Yii::app()->user->ui->editProfileUrl; ?>"><i class="fa fa-user"></i><span>Perfil</span></a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-wrench"></i>
                                <span>Administrar</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo Yii::app()->user->ui->editProfileUrl;?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-user"></i> Perfil</a></li>
                            
                                <li><a href="<?php echo Yii::app()->user->ui->userManagementCreateUrl;?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-plus"></i> Crear Usuario</a></li>
                                
                                <li><a href="<? echo Yii::app()->user->ui->userManagementAdminUrl; ?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-gears"></i> Administrar Usuarios</a></li>
                                
                                <li><a href="<? echo Yii::app()->user->ui->fieldsAdminListUrl; ?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-users"></i> Listar Perfiles</a></li>
                                
                                <li><a href="<?php echo Yii::app()->user->ui->fieldsAdminCreateUrl; ?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-plus"></i> Crear Perfiles</a></li>
                                
                                <li><a href="<?php echo Yii::app()->user->ui->rbacListRolesUrl;?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-sitemap"></i> Roles</a></li>
                                
                                <li><a href="<?php echo Yii::app()->user->ui->rbacListTasksUrl; ?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-wrench"></i> Tareas</a></li>
                                
                                <li><a href="<?php echo Yii::app()->user->ui->rbacListOpsUrl; ?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-cog"></i> Operaciones</a></li>
                                
                                <li><a href="<?php echo Yii::app()->user->ui->rbacUsersAssignmentsUrl; ?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-star"></i> Asignar Roles</a></li>
                                
                                <li><a href="<?php echo Yii::app()->user->ui->sessionAdminUrl; ?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-spinner"></i> Sesiones</a></li>
                                
                                <li><a href="<?php echo Yii::app()->user->ui->systemUpdateUrl; ?>"><i class="fa fa-angle-double-right"></i><i class="fa fa-cloud"></i> Variables de Sistema</a></li>
                                
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><i class="fa fa-signal"></i> Espacio</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                    
                <!-- breadcumb de la aplicacion -->
                <section class="content-header">
                    <!--<h1>
                        Cybox
                        <small>Panel de control</small>
                    </h1>
                    <ol class="breadcrumb">
                        
                        <i class="fa fa-dashboard"><?php if(isset($this->breadcrumbs)):?>
                                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                      'links'=>$this->breadcrumbs,
                                    )); ?>
                                    <?php endif?></i>
                    </ol>-->
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable"> 
                          
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Map box -->
                                      <?php echo $content;?>
                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/demo.js" type="text/javascript"></script>

        <!--  usuarios -->

        <?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
    </body>
</html>