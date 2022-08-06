<?php 
include("danhsachsinhvien.php");
$p= new tmdt();
$layid=0;
if(isset($_REQUEST['id']))
{
	$layid=$_REQUEST['id'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Ghi nhận phát biểu</title>

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
     <p></p> <br>
         <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0" style="font-size:18px; border-bottom: 1px solid #000; margin-left:50px">Phát triển ứng dụng/<b style="color:#C00">Ghi nhận phát biểu</b></p>
         <br><br>
     <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<p style="margin-left:50px; color:#000; font-size:15px";><tr>
    <td align="left" style="height:40px;" > Nhập lại số phát biểu: </td>&nbsp;
    <td align="left">
      <input type="text" name="txtso" id="txtso" value="<?php echo $p->luachon("select phatbieu from sinhvien where id='$layid' limit 1 ");?>" />
 </td>
</tr>
    <tr>
    <td colspan="2" align="center">
       <input class="phatbieu" type="submit" name="nut" id="nut" value="Sửa phát biểu" />
       
    </td>
  </tr>
</p>
  <?php
	switch($_POST['nut'])
  {	
		case 'Sửa phát biểu';
	{
		$idsua=$_REQUEST['id'];
		
		$phatbieu=$_REQUEST['txtso'];

		if($idsua>0)
		{	
			
			if($p->themxoasua("update sinhvien set phatbieu='$phatbieu'where id='$idsua'  limit 1")==1)
		{	
			header('location:ghinhanphatbieu.php');
			}
		else
		{
			echo'sửa không thành công';
			}
		}
		else
		{
			echo 'vui lòng chọn để sửa';
			}
			
		break;
  	}
  }
?>
<br>
<br>
<h3 style="margin-left:450px; color:#C00">DANH SÁCH SINH VIÊN</h3>
<br>
  <table>
    <?php
$p->load_ds_sv("select * from sinhvien order by id desc")
?>
</table>


</form>
<br>
 <p style=" margin-left:250px"><a href="ptud.php"><input type="submit" class="return" value="Trở về"/></a></p>

<!--
  switch ($_POST['button'])
  {
 case'Sửa phat biểu':
	 {		
	 $idsua=$_REQUEST['id']; 
	 $masv=$_REQUEST ['$masv'];
		  $phatbieu=$_REQUEST['phatbieu'];
		  if($idsua>0)
		  {
			  if($p->themxoasua("update sanpham set masv='$masv', phatbieu='$phatbieu' where id='$idsua' limit 1")==1)
			  {
				  header('location:ghinhanphatbieu.php');
				  }
				else
				{
					echo 'sửa không thành công';
				}
			  }
		 else
		 {
			 echo 'vui lòng chọn  để sửa';
			 }
		break;
		 }
  
?>-->

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

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 95%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #F5F5F5;
}
.phatbieu{
	background:#1AAB8A ;
  color:#fff;
  border: 2px solid;
  font-weight:bold;
  border-radius: 5px;
  position:relative;
  height:35px;
  padding:0 1em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
.phatbieu:hover{
	background:#EE7600;
  color:#FFF ;
	cursor:pointer;}
.return{
	 background:#B22222 ;
  color:#fff ;
  border: 2px solid;
  border-radius: 5px;
  font-weight:bold;
  position:relative;
  height:40px;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
.return:hover{
  background:#C00;
  color:#fff;
}
</style>