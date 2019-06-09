<?php
error_reporting(0);
$page = $_GET['page'];
$koneksi = mysqli_connect("localhost", "root", "", "db_alat");
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../asset/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../asset/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../asset/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
       <link rel="stylesheet" type="text/css" href="../asset/css/gaya.css">
       <link rel="stylesheet" type="text/css" href="../asset/css/style.css">

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Halaman Login Admin</h2>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Masukan Username Dan Password </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="" method="post" name="login">
                                          <?php if(isset($fmsg)){ ?><div class="gagal" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>    
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Username" required />
                                     </div>
                                     <div class="form-group input-group">
                                             <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                             <input type="password" name="password" class="form-control" placeholder="Password" required />
                                     </div>
                                     <a href="../index.php" class="btn btn-danger">Back</a>
                                    <input name="submit" type="submit" class="btn btn-success pull-right" value="Login" />
                                </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../asset/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../asset/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../asset/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../asset/js/custom.js"></script>

<div id="fixedfooter">Copyright &copy; 2017 <a href="../about.html">Hollateam™</a></div>
</body>
</html>
<?php
if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST ['password'];
        $query = $koneksi->query("SELECT * FROM `admin` WHERE `username`='$username'
and password='".md5($password)."'");
    $rows = mysqli_num_rows($query);
    $data = $query->fetch_assoc();
        if($rows==1){
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama']; 
        header("Location: index.php?page=$page");
         }else{
?><script type="text/javascript">
alert("Username Atau Password Salah!");
</script><?php
    }
    }else{}
?>