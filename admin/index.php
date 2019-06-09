<?php
error_reporting(0);
$koneksi = new mysqli ("localhost", "root", "", "db_alat");
include "auth.php";
date_default_timezone_set('Asia/jakarta');
$hari = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/plugins/datatables.bootstrap.min.css"/>


  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
  <link href="../asset/css/style.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="../asset/css/gaya.css">
       <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
  <!-- end: Css -->

  <link rel="shortcut icon" href="../asset/img/logo_smk.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="mimin" class="dashboard">
    <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="#" class="navbar-brand"> 
                 <b>SMKN 1 CILEUNGSI</b>
                </a>

              <ul class="nav navbar-nav search-nav">
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $_SESSION['nama']?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="../asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-cogs"></span> Account Setting</a></li>
                     <li><a href="logout.php"><span class="fa fa-power-off"></span> Logout</a></li>
                     <li role="separator" class="divider"></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">

        <!-- start:Left Menu -->
        <div id="left-menu">
          <div class="sub-left-menu scroll">
            <ul class="nav nav-list">
              <li><div class="left-bg"></div></li>
              <li class="time">
                <h1 class="animated fadeInLeft">21:00</h1>
                <p class="animated fadeInRight">Sat,October 1st 2029</p>
              </li>
                    <li>
                        <a  href="?page=index.php"><i class="fa fa-home fa-2x"></i> Beranda</a>
                      </li>  
                    <li>
                        <a  href="?page=anggota"><i class="fa fa-users fa-2x"></i> anggota</a>
                    </li>
                    <li>
                        <a  href="?page=alat"><i class="fa fa-cogs fa-2x"></i> Alat & Barang</a>
                    </li>
                    <li>
                        <a  href="?page=transaction"><i class="fa fa-print fa-2x"></i> Report Peminjaman</a>
                    </li>
                    <li>
                        <a  href="logout.php"><i class="fa fa-sign-out fa-2x"></i> Logout</a>
                    </li>
            </ul>
          </div>
        </div>
        <!-- end: Left Menu -->


        <!-- start: Content -->
        <div id="content" class="article-v1">
            <div class="col-md-12">
                        <?php
                        $page = $_GET['page'];
                        $action = $_GET['action'];
                        $request = $_GET['request'];
                        $submit = $_GET['submit'];
                        $report = $_GET['report'];
                        if ($page == "anggota") {
                            if ($action == "") {
                                include "page/anggota/anggota.php";
                            }elseif($action == "add"){
                              if ($submit == "") {
                                include"page/anggota/add_anggota.php";
                              }elseif ($submit == "add") {
                                include"page/anggota/submit_anggota.php";
                              }
                              }
                            elseif($action == "edit"){
                              if ($submit == "") {
                                include"page/anggota/edit_anggota.php";
                              }elseif($submit == "edit"){
                                include"page/anggota/sub_edit.php";
                              }
                              }elseif ($action == "delete") {
                                include "page/anggota/hapus_anggota.php";
                              }
                      }
                        if ($page == "transaction") {
                          if ($report == "") {
                            include "page/transaksi/proses.php";
                          }elseif ($report == "semua") {
                            include "page/transaksi/transaksisemua.php";
                          }elseif ($report == "harian") {
                            include "page/transaksi/transaksiharian.php";
                          } 
                        }                        
                        if ($page == "alat") {
                            if ($action == "") {
                                include "page/alat/alat.php";
                            }elseif ($action == "add") {
                                if ($request == "") {
                            include "page/alat/add_alat.php";
                            }elseif ($request == "proses") {
                                include "page/alat/proses_add.php";
                            }elseif ($request == "check") {
                                include "page/alat/check.php";
                            }
                            }
                         elseif ($action == "edit") {
                            include "page/alat/edit_alat.php";
                            }
                            elseif ($action == "delete") {
                            include "page/alat/hapus_alat.php";
                            }
                        }if ($page == "index.php") {
                            if ($action == ""){
                                include "page/index/index.php";
                            }
                        }
                        
                        ?>
             </div>
            </div>
        </div>
        <!-- end: content -->

      </div>

        <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li>
                        <a  href="?page=index.php"><i class="fa fa-home fa"></i> Beranda</a>
                      </li>  
                    <li>
                        <a  href="?page=anggota"><i class="fa fa-users fa"></i> anggota</a>
                    </li>
                    <li>
                        <a  href="?page=alat"><i class="fa fa-cogs fa"></i> Alat & Barang</a>
                    </li>
                    <li>
                        <a  href="?page=transaction"><i class="fa fa-print fa"></i> Report Peminjaman</a>
                    </li>
                    <li>
                        <a  href="logout.php"><i class="fa fa-sign-out fa"></i> Logout</a>
                    </li>
                    </li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->
<div id="fixedfooter">Copyright &copy; 2017 <a href="../about.html">Hollateam™</a></div>

<!-- end: Content -->
<!-- start: Javascript -->
<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/jquery.ui.min.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="../asset/js/plugins/moment.min.js"></script>
<script src="../asset/js/plugins/jquery.nicescroll.js"></script>
<!-- plugins -->
<script src="../asset/js/plugins/moment.min.js"></script>
<script src="../asset/js/plugins/jquery.knob.js"></script>
<script src="../asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="../asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="../asset/js/plugins/jquery.nicescroll.js"></script>
<script src="../asset/js/plugins/jquery.mask.min.js"></script>
<script src="../asset/js/plugins/select2.full.min.js"></script>
<script src="../asset/js/plugins/nouislider.min.js"></script>
<script src="../asset/js/plugins/jquery.validate.min.js"></script>
<!-- custom -->
<script src="../asset/js/main.js"></script>
<!-- end: Javascript -->
<script src="../asset/js/plugins/jquery.datatables.min.js"></script>
<script src="../asset/js/plugins/datatables.bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>


<!-- custom -->
</body>
</html>