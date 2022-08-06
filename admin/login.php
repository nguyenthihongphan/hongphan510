<?php
include("adminlogin.php");
$p = new adminlogin;
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Đăng nhập</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">
     <link rel="stylesheet" href="../css/css.css">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/templatemo-style.css">

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
               <div class='main-menu'>
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php" class="smoothScroll">Trang chủ</a></li>
                         <li><a href="#courses" class="smoothScroll">Lớp học phần</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Tài khoản</a></li>
                         <li><a href="" class="smoothScroll">Ngôn ngữ</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="login.php"><i class="fa fa-user"></i> Đăng nhập</a>
                         <ul class='sub-menu'>
                                <li><a href='login.php'>Admin</a></li>
                                <li><a href='../giangvien/login.php'>Giảng viên</a></li>
                                <li><a href='../index.php'>Sinh viên</a></li>
                         </ul>
                         </li>
                    </ul>
               </div>

          </div>          
     </section>
 <br>
 <br>
 <section>
 </section>
 <div class="grid">

      <form action="login.php" method="POST" class="form login">
 
        <div class="form__field">
          <label for="login__username">
             <i class="fa fa-user"></i>
          <span class="hidden">Tên tài khoản</span></label>
           <input type="text" name="adminuser" id="adminuser" placeholder="Tên tài khoản"/>
        </div>
  
        <div class="form__field">
          <label for="login__password">
          <i class="fa fa-lock"></i>
          <span class="hidden">Mật khẩu</span></label>
         <input type="password" name="adminpass" id="adminpass" placeholder="Nhập mật khẩu"/>
        </div>
  
        <div class="form__field">
          <input type="submit" name="nut" id="nut" value="Đăng nhập" />
        </div>
  
  
    </div>

   
  <div align="center"> 
  
  <?php
  switch($_POST['nut'])
  {
	  case 'Đăng nhập':
	  {
		  $user=$_REQUEST['adminuser'];
		  $pass=$_REQUEST['adminpass'];
		  if($user!=''&&$pass!='')
		  {
			  if($p->mylogin($user,$pass)==1)
			  { 
					header ('location:admin.php');  
				  }
				else
				{
					echo'Đăng nhập không thành công';
					}
			  }
		 else
			{
				echo'vui lòng nhập đầy đủ username và passwword'; 
				}
		  break;
		  }
	  }
  ?>
  </div>-->
</form>
  
<br>
<br>



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
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/owl.carousel.min.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/custom.js"></script>

</body>
</html>
<style>
.main-menu ul li{
display: inline-block;
}
.main-menu {
height: 50px;
padding: 10px;
}
.main-menu ul li a {
text-decoration: none;
padding: 10px;
}
.sub-menu {
display: none;
padding: 10px;
}
.main-menu li {
position: relative;
}
.main-menu li:hover .sub-menu{
display: block;
}
.main-menu li .sub-menu{
position: absolute;
top: 10;
left: 0;
}
.main-menu .sub-menu li {
display: block;
width: 150px;
padding: 10px 0;
}
</style>