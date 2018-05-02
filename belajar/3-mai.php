<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MTS | MAI 3</title>
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
                                        <td><code>15</code></td>
                                        <td>
                                            Saya belajar paling baik ketika saya mengetahui topik pembelajaran itu.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai15" value="4" id="mai150"><label for="mai150">Selalu</label>
                                            <input type="radio" name="mai15" value="3" id="mai151"><label for="mai150">Sering</label>
                                            <input type="radio" name="mai15" value="2" id="mai152"><label for="mai151">Kadang-kadang</label>
                                            <input type="radio" name="mai15" value="1" id="mai153"><label for="mai152">Jarang</label>
                                            <input type="radio" name="mai15" value="0" id="mai154"><label for="mai153">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>16</code></td>
                                        <td>
                                            Saya mengetahui apa yang diharapkan guru untuk saya pelajari.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai16" value="4" id="mai160"><label for="mai160">Selalu</label>
                                            <input type="radio" name="mai16" value="3" id="mai161"><label for="mai161">Sering</label>
                                            <input type="radio" name="mai16" value="2" id="mai162"><label for="mai162">Kadang-kadang</label>
                                            <input type="radio" name="mai16" value="1" id="mai163"><label for="mai163">Jarang</label>
                                            <input type="radio" name="mai16" value="0" id="mai164"><label for="mai164">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>17</code></td>
                                        <td>
                                            Saya mudah mengingat informasi.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai17" value="4" id="mai170"><label for="mai170">Selalu</label>
                                            <input type="radio" name="mai17" value="3" id="mai171"><label for="mai171">Sering</label>
                                            <input type="radio" name="mai17" value="2" id="mai172"><label for="mai172">Kadang-kadang</label>
                                            <input type="radio" name="mai17" value="1" id="mai173"><label for="mai173">Jarang</label>
                                            <input type="radio" name="mai17" value="0" id="mai174"><label for="mai174">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>18</code></td>
                                        <td>
                                            Saya menggunakan cara belajar yang berbeda-beda tergantung pada situasi dan kondisi.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai18" value="4" id="mai180"><label for="mai180">Selalu</label>
                                            <input type="radio" name="mai18" value="3" id="mai181"><label for="mai181">Sering</label>
                                            <input type="radio" name="mai18" value="2" id="mai182"><label for="mai182">Kadang-kadang</label>
                                            <input type="radio" name="mai18" value="1" id="mai183"><label for="mai183">Jarang</label>
                                            <input type="radio" name="mai18" value="0" id="mai184"><label for="mai184">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>19</code></td>
                                        <td>
                                           Setelah saya menyelesaikan suatu tugas, saya bertanya kepada diri sendiri apakah ada cara yang lebih mudah.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai19" value="4" id="mai190"><label for="mai190">Selalu</label>
                                            <input type="radio" name="mai19" value="3" id="mai191"><label for="mai191">Sering</label>
                                            <input type="radio" name="mai19" value="2" id="mai192"><label for="mai192">Kadang-kadang</label>
                                            <input type="radio" name="mai19" value="1" id="mai193"><label for="mai193">Jarang</label>
                                            <input type="radio" name="mai19" value="0" id="mai194"><label for="mai194">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>20</code></td>
                                        <td>
                                           Saya mengendalikan sendiri kualitas belajar saya.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai20" value="4" id="mai200"><label for="mai200">Selalu</label>
                                            <input type="radio" name="mai20" value="3" id="mai201"><label for="mai201">Sering</label>
                                            <input type="radio" name="mai20" value="2" id="mai202"><label for="mai202">Kadang-kadang</label>
                                            <input type="radio" name="mai20" value="1" id="mai203"><label for="mai203">Jarang</label>
                                            <input type="radio" name="mai20" value="0" id="mai204"><label for="mai204">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>21</code></td>
                                        <td>
                                            Secara teratur saya melakukan peninjauan kemampuan untuk menolong saya memahami hubungan-hubungan penting.

                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="mai21" value="4" id="mai210"><label for="mai210">Selalu</label>
                                            <input type="radio" name="mai21" value="3" id="mai211"><label for="mai211">Sering</label>
                                            <input type="radio" name="mai21" value="2" id="mai212"><label for="mai212">Kadang-kadang</label>
                                            <input type="radio" name="mai21" value="1" id="mai213"><label for="mai213">Jarang</label>
                                            <input type="radio" name="mai21" value="0" id="mai214"><label for="mai214">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                </tbody>
                            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer center-button">
          <div class="btn-group">
            <a href="2-mai.php">
            <button type="button" class="btn btn-default"><i class="fa fa-angle-left"></i> &nbsp;Sebelumnya</button>
          </a>
          <a href="4-mai.php">
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
