<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MTS | MAI 7</title>
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
  <!-- Modal 1 -->
<div class="modal fade" id="modal-benar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="info-box">
            <span class="info-box-icon bg-aqua">
                            <img src="../Assets/img/teacher.png" class="img-circle" width="75px">
            </span>

            <div class="info-box-content">
<div class="box box-primary learning-card">
                <div class="box-header with-border">
                <h5> Update Skor MAI </h5>
                </div>
                <div class="box-body d-progress">
                  <div class="row">
                    <div class="col-md-4">
                      <input type="text" value="80" class="dial">
                      <h5> Knowlegde </h5>
                      <h6> Sedang </h6>
                    </div>
                    <div class="col-md-4">
                      <input type="text" value="85" class="dial">
                       <h5> Regulation </h5>
                      <h6> Bagus </h6>
                    </div>
                  </div>
                </div>
              </div>
              <p> Dari hasil pengukuran MAI yang telah anda lakukan ada <strong>peningkatan nilai.. </strong> pada nilai <i> knowledge </i> dan <i> regulation </i>. Itu berarti kemampuan metakognisi anda meningkat setelah mempelajari satu materi pada MTS ini.
            </div>
            <!-- /.info-box-content -->
          </div>
            <div class="btn-group pilihan">
              <a href="../dashboard.php">
                <button type="button" class="btn btn-primary btn-block">Kembali Ke Dashboard</button>
              </a>
            </div>
      </div>
    </div>
  </div>
</div>
<!-- end modal 1 -->
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
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
  <li class="li complete">
    <div class="status">
      <h4> 35 </h4>
    </div>
  </li>
  <li class="li complete">
    <div class="status">
      <h4> 42 </h4>
    </div>
  </li>
  <li class="li complete">
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
                                        <td><code>43</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri apakah hal yang sedang dibaca berhubungan dengan apa yang telah saya ketahui.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI43" value="4" id="MAI430"><label for="MAI430">Selalu</label>
                                            <input type="radio" name="MAI43" value="3" id="MAI431"><label for="MAI430">Sering</label>
                                            <input type="radio" name="MAI43" value="2" id="MAI432"><label for="MAI431">Kadang-kadang</label>
                                            <input type="radio" name="MAI43" value="1" id="MAI433"><label for="MAI432">Jarang</label>
                                            <input type="radio" name="MAI43" value="0" id="MAI434"><label for="MAI433">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>44</code></td>
                                        <td>
                                            Saya memikirkan kembali anggapan saya ketika saya bingung.
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI44" value="4" id="MAI440"><label for="MAI440">Selalu</label>
                                            <input type="radio" name="MAI44" value="3" id="MAI441"><label for="MAI441">Sering</label>
                                            <input type="radio" name="MAI44" value="2" id="MAI442"><label for="MAI442">Kadang-kadang</label>
                                            <input type="radio" name="MAI44" value="1" id="MAI443"><label for="MAI443">Jarang</label>
                                            <input type="radio" name="MAI44" value="0" id="MAI444"><label for="MAI444">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>45</code></td>
                                        <td>
                                            Saya mengatur waktu saya untuk mencapai tujuan sebaik-baiknya.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI45" value="4" id="MAI450"><label for="MAI450">Selalu</label>
                                            <input type="radio" name="MAI45" value="3" id="MAI451"><label for="MAI451">Sering</label>
                                            <input type="radio" name="MAI45" value="2" id="MAI452"><label for="MAI452">Kadang-kadang</label>
                                            <input type="radio" name="MAI45" value="1" id="MAI453"><label for="MAI453">Jarang</label>
                                            <input type="radio" name="MAI45" value="0" id="MAI454"><label for="MAI454">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>46</code></td>
                                        <td>
                                            Saya lebih banyak belajar jika saya tertarik/senang dengan topik.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI46" value="4" id="MAI460"><label for="MAI460">Selalu</label>
                                            <input type="radio" name="MAI46" value="3" id="MAI461"><label for="MAI461">Sering</label>
                                            <input type="radio" name="MAI46" value="2" id="MAI462"><label for="MAI462">Kadang-kadang</label>
                                            <input type="radio" name="MAI46" value="1" id="MAI463"><label for="MAI463">Jarang</label>
                                            <input type="radio" name="MAI46" value="0" id="MAI464"><label for="MAI464">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>47</code></td>
                                        <td>
                                           Saya berupaya membagi kegiatan belajar saya menjadi langkah-langkah yang lebih kecil.
                                        </td>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI47" value="4" id="MAI470"><label for="MAI470">Selalu</label>
                                            <input type="radio" name="MAI47" value="3" id="MAI471"><label for="MAI471">Sering</label>
                                            <input type="radio" name="MAI47" value="2" id="MAI472"><label for="MAI472">Kadang-kadang</label>
                                            <input type="radio" name="MAI47" value="1" id="MAI473"><label for="MAI473">Jarang</label>
                                            <input type="radio" name="MAI47" value="0" id="MAI474"><label for="MAI474">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><code>48</code></td>
                                        <td>
                                          Saya lebih memperhatikan makna umum dari pada makna khusus.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI48" value="4" id="MAI480"><label for="MAI480">Selalu</label>
                                            <input type="radio" name="MAI48" value="3" id="MAI481"><label for="MAI481">Sering</label>
                                            <input type="radio" name="MAI48" value="2" id="MAI482"><label for="MAI482">Kadang-kadang</label>
                                            <input type="radio" name="MAI48" value="1" id="MAI483"><label for="MAI483">Jarang</label>
                                            <input type="radio" name="MAI48" value="0" id="MAI484"><label for="MAI484">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                    <tr>
                                        <td><code>49</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri tentang seberapa baik saya bekerja, pada waktu mempelajari sesuatu hal yang baru.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI49" value="4" id="MAI490"><label for="MAI490">Selalu</label>
                                            <input type="radio" name="MAI49" value="3" id="MAI491"><label for="MAI491">Sering</label>
                                            <input type="radio" name="MAI49" value="2" id="MAI492"><label for="MAI492">Kadang-kadang</label>
                                            <input type="radio" name="MAI49" value="1" id="MAI493"><label for="MAI493">Jarang</label>
                                            <input type="radio" name="MAI49" value="0" id="MAI494"><label for="MAI494">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>50</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri apakah saya belajar sebanyak yang saya mampu, setiap kali saya menyelesaikan tugas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI50" value="4" id="MAI500"><label for="MAI500">Selalu</label>
                                            <input type="radio" name="MAI50" value="3" id="MAI501"><label for="MAI501">Sering</label>
                                            <input type="radio" name="MAI50" value="2" id="MAI502"><label for="MAI502">Kadang-kadang</label>
                                            <input type="radio" name="MAI50" value="1" id="MAI503"><label for="MAI503">Jarang</label>
                                            <input type="radio" name="MAI50" value="0" id="MAI504"><label for="MAI504">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>51</code></td>
                                        <td>
                                            Saya melupakan informasi baru yang tidak jelas.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI51" value="4" id="MAI510"><label for="MAI510">Selalu</label>
                                            <input type="radio" name="MAI51" value="3" id="MAI511"><label for="MAI511">Sering</label>
                                            <input type="radio" name="MAI51" value="2" id="MAI512"><label for="MAI512">Kadang-kadang</label>
                                            <input type="radio" name="MAI51" value="1" id="MAI513"><label for="MAI513">Jarang</label>
                                            <input type="radio" name="MAI51" value="0" id="MAI514"><label for="MAI514">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><code>52</code></td>
                                        <td>
                                            Saya berhenti dan selanjutnya membaca kembali jika saya bingung.
                                        </td>
                                    </tr>
                                    </tr>
                                       <tr>
                                        <td>
                                                 <legend></legend>
                                        </td>
                                        <td>
                                          <fieldset>
                                            <input type="radio" name="MAI52" value="4" id="MAI520"><label for="MAI520">Selalu</label>
                                            <input type="radio" name="MAI52" value="3" id="MAI521"><label for="MAI521">Sering</label>
                                            <input type="radio" name="MAI52" value="2" id="MAI522"><label for="MAI522">Kadang-kadang</label>
                                            <input type="radio" name="MAI52" value="1" id="MAI523"><label for="MAI523">Jarang</label>
                                            <input type="radio" name="MAI52" value="0" id="MAI524"><label for="MAI524">Tidak Pernah</label>
                                          </fieldset>
                                        </td>
                                      </tr>

                                </tbody>
                            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer center-button">
          <div class="btn-group">
            <a href="6-mai.php">
            <button type="button" class="btn btn-default"><i class="fa fa-angle-left"></i> &nbsp;Sebelumnya</button>
          </a>
          <a href="#" data-toggle="modal" data-target="#modal-benar">
            <button type="button" class="btn btn-primary">Submit</button>
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
