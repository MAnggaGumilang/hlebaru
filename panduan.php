<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MTS | Panduan </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="Assets/css/skin-black.css">
  <link rel="stylesheet" href="Assets/css/codemirror.css">
  <link rel="stylesheet" href="Assets/css/froala_editor.pkgd.css">
  <link rel="stylesheet" href="Assets/css/froala_style.css">
  <link rel="stylesheet" href="Assets/css/custom.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>TS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Metacognitive</b>Training System</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <!-- search form (Optional) -->
      <form action="#" method="get" class="nav-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">2</span>
            </a>
            <ul class="dropdown-menu">
         <!-- DIRECT CHAT PRIMARY -->
          <div class="box box-primary direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Live Group Chat</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="2 New Messages" class="badge bg-light-blue">2</span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">Budi Hivi</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="Assets/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Hallo, Ada yang tahu bagaimana caranya memilih strategi belajar?
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right">Lestari Sundari</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="Assets/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Hi Budi, menu itu akan muncul setelah kita memilih materi pembelajaran..
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
              </div>
              <!--/.direct-chat-messages-->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Ketik Balasan ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat">Kirim</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Kamu mempunyai 2 Notifikasi</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Materi Sorting telah selesai dipelajari
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Kamu merubah password
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="Assets/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Budi Hivi</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="Assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  Budi Hivi - S1 Pendidikan Teknik Informatika
                  <small>120533430947</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="index.php" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Budi Hivi</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


     <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">&nbsp;</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="dashboard.php"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li class="active"><a href="panduan.php"><i class="fa fa-info-circle"></i> <span>Panduan</span></a></li>
        <li><a href="perkuliahan.php"><i class="fa fa-sticky-note-o"></i> <span>Tentang Perkuliahan</span></a></li>
        <li><a href="profile.php"><i class="fa fa-gear"></i> <span>Profile</span></a></li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Belajar</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        Panduan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda </a></li>
        <li class="active">Panduan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

 <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> Informasi Tentang Penggunaan Sistem </h3>
        </div>
        <div class="box-body">
          <object data="Assets/materi/info.pdf" type="application/pdf" width="100%" height="1048px">
                                        <iframe src="Assets/materi/sample.pdf" style="border: none;" width="100%" height="100%">
                                        This browser does not support PDFs. Please download the PDF to view it: <a href="Assets/materi/sample.pdf">Download PDF</a>
                                        </iframe>
                                        </object>
        </div>
        <!-- /.box-body -->
      </div>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Version 2.0.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">DTETI FT UGM</a>.</strong> Template By <a href="https://adminlte.io"> Almsaeed Studio. </a>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="Assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="Assets/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="Assets/js/adminlte.min.js"></script>
<script src="Assets/js/jquery.knob.js"></script>
<script src="Assets/js/codemirror.js"></script>
<script src="Assets/js/xml.js"></script>
<script src="Assets/js/froala_editor.pkgd.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script>
    $(function() {
        $(".dial").knob();
    });
    $(function() { $('textarea').froalaEditor() });
</script>

</body>
</html>
