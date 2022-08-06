<?php 
session_start();
if(isset($_SESSION['id']) &&isset($_SESSION['user'])&&isset($_SESSION['pass'])&&isset($_SESSION['phanquyen']))
{
	include("login_tmd.php");
	$q= new login();
	$q->confirmlogin($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['phanquyen']);
	}
else
{
	header('location: index.php');
	}

$iduser=$_SESSION['id'];
$ten=$q->luachon("select ten from taikhoan where id='$iduser' limit 1");
$lop=$q->luachon("select lop from taikhoan where id='$iduser' limit 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Thông tin cá nhân</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">SHARK</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="trangchu.php" class="smoothScroll">Trang chủ</a></li>
                         <li><a href="lophp.php" class="smoothScroll">Lớp học phần</a></li>
                         <li><a href="thongbao.php" class="smoothScroll">Thông báo</a></li>
                         <li><a href="lienhe.php" class="smoothScroll">Liên hệ</a></li>
                         <li><a href="" class="smoothScroll">Ngôn ngữ</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href=""> <i class="fa fa-user"></i> <?php echo $ten ; ?> </a></li>
                         <li></li>
                         <li class="" ><a href="index.php">Đăng xuất</a></li>
                    </ul>
               </div>

          </div>
     </section>
     
<br>
<br>
<br>
<br>
 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row" style="margin-left:500px">
                    <!-- Column -->
                    <div class=" col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="assets/images/users/1.jpg"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $ten ;?></h4>
                                    <h4 class="card-title m-t-10"><?php echo $lop ;?></h4>
                                    
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-picture"></i>
                                                
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body" style="font-size:16px"> <small class="text-muted">Email  </small>
                                <h6>123456r@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>035642659</h6> <small class="text-muted p-t-30 db">Địa chỉ</small>
                                <h6>Gò Vấp, thành phố Hồ Chí Minh</h6>
                                <div class="map-box">
                                    
                                </div> 
                            
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body" style="margin-left:500px">
                                <form class="form-horizontal form-material mx-2">
                                  
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Cập nhật thông tin</button>
                                             <a href="ptud.php" class="btn btn-danger"> Quay lại</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                </div>
  <section></section>
 
  <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Địa chỉ</h2>
                              </div>
                              <address>
                                   <p>Nguyễn Văn Bảo phường 4 Gò Vấp</p>
                                   <p><i class=" fa fa-converlope"></i> csm@iuh.edu.vn</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/search/top?q=iuh%20-%20tr%C6%B0%E1%BB%9Dng%20%C4%91%E1%BA%A1i%20h%E1%BB%8Dc%20c%C3%B4ng%20nghi%E1%BB%87p%20tp.hcm" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Liên hệ</h2>
                              </div>
                              <address>
                                   <p>+0283.49830-0283.565678</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Phản hồi</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Email của bạn" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Gửi">
                                        </form>
                                        <span><sup>*</sup>Không spam mail</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>
  <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
         <!--Menu sidebar -->
  

</body>
</html>