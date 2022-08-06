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

     <title>Trang chủ</title>

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
                         <li><a href="#home" class="smoothScroll">Trang chủ</a></li>
                         <li><a href="#courses" class="smoothScroll">Lớp học phần</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Thông báo</a></li>
                         <li><a href="#contact" class="smoothScroll">Liên hệ</a></li>
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


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Tham gia các hoạt đông ngoại khóa khác</h1>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Tại đây</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Tìm hiểu thêm thông tin khóa học của trường</h1>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Liên hệ</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>

     <!-- ABOUT 

                                   <h2>Signup today</h2>
                                   <input type="text" name="full name" class="form-control" placeholder="Full name" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Your email address" required="">

                                   <input type="password" name="password" class="form-control" placeholder="Your password" required="">

                                   <button class="submit-btn form-control" id="form-submit">Get started</button>

     -->


     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Lớp học phần</h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/00.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 2 / 6 / 2022</span>
                                                       <span><i class="fa fa-clock-o"></i> Tiết 10-12</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="ptud.php">Phát triển ứng dụng</a></h3>
                                                  <p>DHHTTT15B - 420300350102</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                    <i class=" fa fa-user-circle img-responsive "></i>   
                                                       <span>Phan Thị Bảo Trân</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/00.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 2 / 6 / 2022</span>
                                                       <span><i class="fa fa-clock-o"></i> Tiết 1-3</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Các HTTM doanh nghiệp</a></h3>
                                                  <p>DHHTTT15A - 420300309101</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                    <i class=" fa fa-user-circle img-responsive "></i>   
                                                       <span>Nguyễn Trần Kỹ</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/00.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 2 / 6 / 2022</span>
                                                       <span><i class="fa fa-clock-o"></i> Tiết 7-9</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Quản trị bán hàng</a></h3>
                                                  <p>DHQT15B - 420302350102</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                    <i class=" fa fa-user-circle img-responsive "></i>   
                                                       <span>Lê Thị Hường</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/00.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 2 / 6 / 2022</span>
                                                       <span><i class="fa fa-clock-o"></i> Tiết 10-12</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Hệ thống thông tin quản lý</a></h3>
                                                  <p>DHHTTT15A - 420300111901</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                    <i class=" fa fa-user-circle img-responsive "></i>   
                                                       <span>Nguyễn Hữu Quang</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                             

                         </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Thông báo </h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                      
                                        <div class="tst-author">
                                             <h4>Nộp bài báo cáo: Phát triển ứng dụng</h4>
                                             <h4 style="color: brown;">Ngày hết hạn 20/4/2022</h4>
                                        </div>
                                        <p>Các bạn tranh thủ nộp đúng hạn để demo </p>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                      
                                        <div class="tst-author">
                                             <h4>Làm bài tập TK3: Hệ thống thông tin quản lý</h4>
                                             <h4 style="color: brown;">Ngày hết hạn 19/4/2022</h4>
                                        </div>
                                        <p>Làm thường kỳ 3 , nội dung chương 5 6 7</p>
                                   </div>
                              </div>


                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                      
                                        <div class="tst-author">
                                             <h4>Xem nội dung ôn thi cuối kì: Quản trị bán hàng</h4>
                                             <h4 style="color: brown;">25/5/2022</h4>
                                        </div>
                                        <p>Nội dung ôn thi cô đã gửi, cuối kì thi ĐỀ ĐÓNG</p>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section> 


     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Liên hệ </h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Họ và tên" name="name" required>
                    
                                   <input type="text" class="form-control" placeholder="Mã số sinh viên" name="mssv" required>

                                   <textarea class="form-control" rows="6" placeholder="Viết vào đây" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Gửi">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/000.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       


     <!-- FOOTER -->
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