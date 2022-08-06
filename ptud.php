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
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Phát triển ứng dụng</title>

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
  <div class="vertical-nav bg-white" id="sidebar" style="margin-left:50px">
    <div class="py-4 px-3 mb-4 bg-light">
     
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0" style="font-size:25px; border-bottom: 1px solid #000">Phát triển ứng dụng(420300350102)</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="diemdanh.php" class="nav-link text-dark font-italic bg-light" style="font-size:18px">
                  <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                  Điểm danh
              </a>
      </li>
      <li class="nav-item">
        <a href="hoatdongngoaikhoa.php" class="nav-link text-dark font-italic" style="font-size:18px">
                  <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                  Hoạt động ngoại khóa
              </a>
      </li>
      <li class="nav-item">
        <a href="matkhau.php" class="nav-link text-dark font-italic" style="font-size:18px">
                  <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                  Ghi nhận phát biểu
              </a>
      </li>
      <li class="nav-item">
        <a href="baocaohdnk.php" class="nav-link text-dark font-italic" style="font-size:18px">
                  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                  Nộp báo cáo
              </a>
      </li>
    </ul>
    <br>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0" style="font-size:20px">Xem thông tin</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="thongtincanhan.php" class="nav-link text-dark font-italic" style="font-size:18px">
                  <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                  Thông tin cá nhân
              </a>
      </li>
      <li class="nav-item">
        <a href="xemthongke.php" class="nav-link text-dark font-italic" style="font-size:18px">
                  <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                  Xem thống kê
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic" style="font-size:18px">
                  <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                 Báo cáo
              </a>
      </li>
    </ul>
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

</body>
</html>