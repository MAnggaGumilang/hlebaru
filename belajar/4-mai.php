<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MTS | MAI 4</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../Assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../Assets/css/skin-black.css">
  <link rel="stylesheet" href="../Assets/css/custom.css">

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
<body class="hold-transition skin-black sidebar-collapse sidebar-mini " data-gr-c-s-loaded="true">

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
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
         <!-- DIRECT CHAT PRIMARY -->
          <div class="box box-primary direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Direct Chat</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="4 New Messages" class="badge bg-light-blue">3</span>
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
                  <img class="direct-chat-img" src="../Assets/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Ada yang sudah ngerjakan materi Sorting?
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
                  <img class="direct-chat-img" src="../Assets/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Wow.. kamu cepat sekali sampai sana
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
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Kamu mempunyai 1 Notifikasi</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Materi Sorting telah selesai dipelajari
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
              <img src="../Assets/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Budi Hivi</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../Assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Budi Hivi - S1 Teknologi Informasi
                  <small>407827</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="../Assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
        <li><a href="../dashboard.php"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li><a href="../panduan.php"><i class="fa fa-info-circle"></i> <span>Panduan</span></a></li>
        <li><a href="../perkuliahan.php"><i class="fa fa-sticky-note-o"></i> <span>Tentang Perkuliahan</span></a></li>
        <li><a href="profile.php"><i class="fa fa-gear"></i> <span>Profile</span></a></li>
        <li class="active"><a href="#"><i class="fa fa-book"></i> <span>Belajar</span></a></li>
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
        MAI Test
        <small>Tes yang mengukur kemampuan metakognisi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i>Belajar</a></li>
        <li class="active">MAI Test</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

<div class="box box-primary">
        <div class="box-header with-border">
 <div class="vertical">
<ul class="timeline2" id="timeline2">
  <li class="li complete">
    <div class="status">
      <h4> 7 </h4>
    </div>
  </li>
  <li class="li complete">
    <div class="status">
      <h4> 14 </h4>
    </div>
  </li>
  <li class="li complete">
    <div class="status">
      <h4> 21 </h4>
    </div>
  </li>
  <li class="li complete">
    <div class="status">
      <h4> 28 </h4>
    </div>
  </li>
  <li class="li">
    <div class="status">
      <h4> 35 </h4>
    </div>
  </li>
  <li class="li">
    <div class="status">
      <h4> 42 </h4>
    </div>
  </li>
  <li class="li">
    <div class="status">
      <h4> 52 </h4>
    </div>
  </li>
 </ul>
</div>
        </div>
        <div class="box-body">
  <table class="projects table" id="content">
                                <thead>
                                    <tr>
                                        <th width="5%">Nomor</th>
                                        <th width="95%">Pertanyaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>22</code></td>
                                        <td>
                                            Sebelum memulai sesuatu, saya bertanya kepada diri sendiri tentang hal-hal terkait.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai22" value="4" id="mai220"><label for="mai220">Selalu</label>
                                            <input type="radio" name="mai22" value="3" id="mai221"><label for="mai220">Sering</label>
                                            <input type="radio" name="mai22" value="2" id="mai222"><label for="mai221">Kadang-kadang</label>
                                            <input type="radio" name="mai22" value="1" id="mai223"><label for="mai222">Jarang</label>
                                            <input type="radio" name="mai22" value="0" id="mai224"><label for="mai223">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>23</code></td>
                                        <td>
                                            Saya mempertimbangkan berbagai cara untuk memecahkan sesuatu masalah sebelum akhirnya memutuskan salah satu diantaranya.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai23" value="4" id="mai230"><label for="mai230">Selalu</label>
                                            <input type="radio" name="mai23" value="3" id="mai231"><label for="mai231">Sering</label>
                                            <input type="radio" name="mai23" value="2" id="mai232"><label for="mai232">Kadang-kadang</label>
                                            <input type="radio" name="mai23" value="1" id="mai233"><label for="mai233">Jarang</label>
                                            <input type="radio" name="mai23" value="0" id="mai234"><label for="mai234">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>24</code></td>
                                        <td>
                                            Setiap kali selesai belajar, saya membuat rangkuman.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai24" value="4" id="mai240"><label for="mai240">Selalu</label>
                                            <input type="radio" name="mai24" value="3" id="mai241"><label for="mai241">Sering</label>
                                            <input type="radio" name="mai24" value="2" id="mai242"><label for="mai242">Kadang-kadang</label>
                                            <input type="radio" name="mai24" value="1" id="mai243"><label for="mai243">Jarang</label>
                                            <input type="radio" name="mai24" value="0" id="mai244"><label for="mai244">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>25</code></td>
                                        <td>
                                            Saya menanyakan orang lain bilamana saya tidak memahami sesuatu.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai25" value="4" id="mai250"><label for="mai250">Selalu</label>
                                            <input type="radio" name="mai25" value="3" id="mai251"><label for="mai251">Sering</label>
                                            <input type="radio" name="mai25" value="2" id="mai252"><label for="mai252">Kadang-kadang</label>
                                            <input type="radio" name="mai25" value="1" id="mai253"><label for="mai253">Jarang</label>
                                            <input type="radio" name="mai25" value="0" id="mai254"><label for="mai254">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>26</code></td>
                                        <td>
                                           Saya dapat memotivasi diri untuk belajar bilamana diperlukan.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai26" value="4" id="mai260"><label for="mai260">Selalu</label>
                                            <input type="radio" name="mai26" value="3" id="mai261"><label for="mai261">Sering</label>
                                            <input type="radio" name="mai26" value="2" id="mai262"><label for="mai262">Kadang-kadang</label>
                                            <input type="radio" name="mai26" value="1" id="mai263"><label for="mai263">Jarang</label>
                                            <input type="radio" name="mai26" value="0" id="mai264"><label for="mai264">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>27</code></td>
                                        <td>
                                           Saya menyadari cara apa yang digunakan ketika saya belajar.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai27" value="4" id="mai270"><label for="mai270">Selalu</label>
                                            <input type="radio" name="mai27" value="3" id="mai271"><label for="mai271">Sering</label>
                                            <input type="radio" name="mai27" value="2" id="mai272"><label for="mai272">Kadang-kadang</label>
                                            <input type="radio" name="mai27" value="1" id="mai273"><label for="mai273">Jarang</label>
                                            <input type="radio" name="mai27" value="0" id="mai274"><label for="mai274">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>28</code></td>
                                        <td>
                                            Saya biasa memikirkan manfaat cara-cara belajar yang saya pakai.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai28" value="4" id="mai280"><label for="mai280">Selalu</label>
                                            <input type="radio" name="mai28" value="3" id="mai281"><label for="mai281">Sering</label>
                                            <input type="radio" name="mai28" value="2" id="mai282"><label for="mai282">Kadang-kadang</label>
                                            <input type="radio" name="mai28" value="1" id="mai283"><label for="mai283">Jarang</label>
                                            <input type="radio" name="mai28" value="0" id="mai284"><label for="mai284">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                </tbody>
                            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer center-button">
          <div class="btn-group">
            <a href="3-mai.php">
            <button type="button" class="btn btn-default"><i class="fa fa-angle-left"></i> &nbsp;Sebelumnya</button>
          </a>
          <a href="5-mai.php">
            <button type="button" class="btn btn-info">Selanjutnya &nbsp; <i class="fa fa-angle-right"> </i></button>
          </a>
          </div>
        </div>
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
<script src="../Assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../Assets/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../Assets/js/adminlte.min.js"></script>
<script src="../Assets/js/jquery.knob.js"></script>
<script src="../Assets/js/pagination.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script>
    $(function() {
        $(".dial").knob();
    });
</script>

</body>
</html>
