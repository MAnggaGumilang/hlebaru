<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MTS | MAI 1</title>
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
    <a href="../index.php" class="logo">
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
        <li><a href="#"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-info-circle"></i> <span>Panduan</span></a></li>
        <li><a href="#"><i class="fa fa-sticky-note-o"></i> <span>Tentang Perkuliahan</span></a></li>
        <li><a href="#"><i class="fa fa-gear"></i> <span>Profile</span></a></li>
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
  <li class="li">
    <div class="status">
      <h4> 14 </h4>
    </div>
  </li>
  <li class="li">
    <div class="status">
      <h4> 21 </h4>
    </div>
  </li>
  <li class="li">
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
                                        <td><code>1</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri, ”Apakah saya sudah mencapai tujuan saya?”, ketika sedang berupaya mencapai tujuan secara intensif.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI1" value="4" id="MAI10"><label for="MAI10">Selalu</label>
                                            <input type="radio" name="MAI1" value="3" id="MAI11"><label for="MAI10">Sering</label>
                                            <input type="radio" name="MAI1" value="2" id="MAI12"><label for="MAI11">Kadang-kadang</label>
                                            <input type="radio" name="MAI1" value="1" id="MAI13"><label for="MAI12">Jarang</label>
                                            <input type="radio" name="MAI1" value="0" id="MAI14"><label for="MAI13">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>2</code></td>
                                        <td>
                                            Saya mempertimbangkan berbagai pilihan sebelum saya menyelesaikan sebuah permasalahan.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI2" value="4" id="MAI20"><label for="MAI20">Selalu</label>
                                            <input type="radio" name="MAI2" value="3" id="MAI21"><label for="MAI21">Sering</label>
                                            <input type="radio" name="MAI2" value="2" id="MAI22"><label for="MAI22">Kadang-kadang</label>
                                            <input type="radio" name="MAI2" value="1" id="MAI23"><label for="MAI23">Jarang</label>
                                            <input type="radio" name="MAI2" value="0" id="MAI24"><label for="MAI24">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>3</code></td>
                                        <td>
                                            Saya coba menggunakan cara-cara yang pernah saya pakai sebelumnya.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI3" value="4" id="MAI30"><label for="MAI30">Selalu</label>
                                            <input type="radio" name="MAI3" value="3" id="MAI31"><label for="MAI31">Sering</label>
                                            <input type="radio" name="MAI3" value="2" id="MAI32"><label for="MAI32">Kadang-kadang</label>
                                            <input type="radio" name="MAI3" value="1" id="MAI33"><label for="MAI33">Jarang</label>
                                            <input type="radio" name="MAI3" value="0" id="MAI34"><label for="MAI34">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>4</code></td>
                                        <td>
                                            Saya terus menerus mengatur diri selama belajar agar memiliki waktu yang cukup.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI4" value="4" id="MAI40"><label for="MAI40">Selalu</label>
                                            <input type="radio" name="MAI4" value="3" id="MAI41"><label for="MAI41">Sering</label>
                                            <input type="radio" name="MAI4" value="2" id="MAI42"><label for="MAI42">Kadang-kadang</label>
                                            <input type="radio" name="MAI4" value="1" id="MAI43"><label for="MAI43">Jarang</label>
                                            <input type="radio" name="MAI4" value="0" id="MAI44"><label for="MAI44">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>5</code></td>
                                        <td>
                                           Saya memahami kekuatan dan kelemahan kecerdasan saya.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI5" value="4" id="MAI50"><label for="MAI50">Selalu</label>
                                            <input type="radio" name="MAI5" value="3" id="MAI51"><label for="MAI51">Sering</label>
                                            <input type="radio" name="MAI5" value="2" id="MAI52"><label for="MAI52">Kadang-kadang</label>
                                            <input type="radio" name="MAI5" value="1" id="MAI53"><label for="MAI53">Jarang</label>
                                            <input type="radio" name="MAI5" value="0" id="MAI54"><label for="MAI54">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>6</code></td>
                                        <td>
                                           Saya berpikir tentang apa yang sebenarnya perlu saya pelajari sebelum mengerjakan tugas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI6" value="4" id="MAI60"><label for="MAI60">Selalu</label>
                                            <input type="radio" name="MAI6" value="3" id="MAI61"><label for="MAI61">Sering</label>
                                            <input type="radio" name="MAI6" value="2" id="MAI62"><label for="MAI62">Kadang-kadang</label>
                                            <input type="radio" name="MAI6" value="1" id="MAI63"><label for="MAI63">Jarang</label>
                                            <input type="radio" name="MAI6" value="0" id="MAI64"><label for="MAI64">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>7</code></td>
                                        <td>
                                            Saya menyadari bagaimana baiknya saya menyelesaikan suatu tes.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI7" value="4" id="MAI70"><label for="MAI70">Selalu</label>
                                            <input type="radio" name="MAI7" value="3" id="MAI71"><label for="MAI71">Sering</label>
                                            <input type="radio" name="MAI7" value="2" id="MAI72"><label for="MAI72">Kadang-kadang</label>
                                            <input type="radio" name="MAI7" value="1" id="MAI73"><label for="MAI73">Jarang</label>
                                            <input type="radio" name="MAI7" value="0" id="MAI74"><label for="MAI74">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                </tbody>
                            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer center-button">
          <div class="btn-group">
            <button type="button" class="btn btn-default disabled"><i class="fa fa-angle-left"> </i> &nbsp;Sebelumnya</button>
            <a href="2-mai.php">
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
