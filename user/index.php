<?php
include 'auth.php';
$koneksi = new mysqli ("localhost", "root", "", "db_alat")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/mediaelementplayer.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
  <link href="../asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="../asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard topnav">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
                <a href="index.html" class="navbar-brand"> 
                 <b>TRANSAKSI</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                  <li class="active"><a href="?page=pinjam"><i class="icon icon-logout"></i> PINJAM ALAT</a></li>
                  <li class="active"><a href="?page=kembali"><i class="icon icon-login"></i> KEMBALIKAN ALAT</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $_SESSION['nama']?></span></li>
                <a href="logout.php" class="btn btn-primary" style="margin-top: 10px;"><i class="fa fa-sign-out"  ></i>Logout</a>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
        <div id="content" class="article-v1">
            <div class="col-md-12">
                        <?php
                        $page = $_GET['page'];
                        $action = $_GET['action'];
                        if ($page == "index") {
                          include"page/index.php";
                        }
                        if ($page == "pinjam") {
                          include"page/pinjam/index.php";
                        }
                        if ($page == "kembali") {
                          if ($action == "") {
                          include"page/kembali/index.php";
                        }elseif($action == "proses"){
                          include"page/kembali/proses.php";
                        }
                        elseif ($action == "kembalikan") {
                          include "page/kembali/kembali.php";
                        }
                        }                     
                        ?>
            </div>
        </div>

<!-- start: Javascript -->
<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/jquery.ui.min.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="../asset/js/plugins/holder.min.js"></script>
<script src="../asset/js/plugins/moment.min.js"></script>
<script src="../asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="../asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>
<!-- end: Javascript -->
</body>
</html>