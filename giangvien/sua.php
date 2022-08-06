<?php 
session_start();
if(isset($_SESSION['id']) &&isset($_SESSION['user'])&&isset($_SESSION['pass'])&&isset($_SESSION['phanquyen']))
{
	include("./classes/login_tmdt.php");
	$q= new gvlogin;
	$q->confirmlogin($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['phanquyen']);
	}
else
{
	header('location:login.php');
	}
include('./classes/quanli.php');
$p= new quanli;
$layid=0;
if(isset($_REQUEST['id']))
{
	$layid=$_REQUEST['id'];
	}
$iduser=$_SESSION['id'];
$ten=$q->luachon("select ten from giangvien where id='$iduser' limit 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Sửa hoạt động ngoại khóa</title>

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
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="trangchu.php" class="smoothScroll">Trang chủ</a></li>
                         <li><a href="#courses" class="smoothScroll">Lớp giảng dạy</a></li>
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
<br>
<p></p>
<br>
 <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0" style="font-size:18px; border-bottom: 1px solid #000; margin-left:50px">Phát triển ứng dụng(420300350102)/Hoạt động ngoại khóa/ Thêm Hoạt động ngoại khóa</p>
         <br><br>
        
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
     <table width="70%" height="100px" border="1" align="center">
     	<tr style="background:#6CC">
        	<td colspan="2" align="center"><h3>Cập nhật hoạt động ngoại khóa</h3></td>
            </tr>
         <tr>
         	<td>Tên hoạt động</td>
            <td><input type="text" id="tenhd" name="tenhd" value="<?php echo $p->luachon("select tenhd from hoatdong where id='$layid' limit 1 ");?>" size="60"></td>
            </tr>
             <tr>
         	<td>Nội dung</td>
            <td><textarea id="noidung" name="noidung" cols="60" rows="10"><?php echo $p->luachon("select noidung from hoatdong where id='$layid' limit 1 ");?></textarea></td>
            </tr>
             <tr>
         	<td>Hạn nộp</td>
            <td><input type="date" id="han" name="han" value="<?php echo $p->luachon("select han from hoatdong where id='$layid' limit 1 ");?>" size="30"></td>
            </tr>
             <tr>
         	<td colspan="2" align="center">
            <input type="submit" id="btnSave" name="btnSave" value="Cập nhật">
            </td>
            </tr>
                     
</table>
<div align="center">
  <?php
  switch($_POST['btnSave'])
  {
	  case 'Cập nhật';
	{
		$idsua=$_REQUEST['id'];
		$tenhd=$_REQUEST['tenhd'];
		$noidung=$_REQUEST['noidung'];
		$han=$_REQUEST['han'];
		if($idsua>0)
		{	
			
			if($p->themxoasua("update hoatdong set tenhd='$tenhd',noidung='$noidung', han='$han' where id='$idsua'   limit 1")==1)
		{	
			echo "<script>alert('Cập nhật thành công!')</script>";
			}
		else
		{
			echo "<script>alert('Sửa không thành công!')</script>";
			}
		}
		else
		{
			echo "<script>alert('Sửa không thành công!')</script>";
			}
			
		  break;
		  }
	  }
  ?>
   </form>
<br>
<br>
<br>
<table>
<tr>
      <td colspan="2" align="center">
       <a href="ptud.php"> Quay lại </a>
       </td>
    </tr>
</table>

</form>
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
