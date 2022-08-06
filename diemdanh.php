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
	include('giangvien/classes/quanli.php');
$p=new quanli();
	$layid=0;
if(isset($_REQUEST['id']))
{
	$layid=$_REQUEST['id'];
	}
$iduser=$_SESSION['id'];
$id=$q->luachon("select id from taikhoan where id='$iduser' limit 1");
$ten=$q->luachon("select ten from taikhoan where id='$iduser' limit 1");
$masv=$q->luachon("select username from taikhoan where id='$iduser' limit 1");
$lop=$q->luachon("select lop from taikhoan where id='$iduser' limit 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Điểm danh</title>

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
                         <li class="" ><a href="logout.php">Đăng xuất</a></li>
                    </ul>
               </div>

          </div>
     </section>


    <br>
    <br>
     <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0" style="font-size:18px; border-bottom: 1px solid #000; margin-left:50px">Phát triển ứng dụng/Điểm danh</p>
     <br>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<br>
<?php echo '<a style="margin-left:50px;" href="?id='.$id.'"> <button type="button">Chọn cập nhật điểm danh</button></a>'?>
<br>
<?php
session_start();
$mytime = 120;
if(!isset($_SESSION['time']))
{
	$_SESSION['time'] = time();
	}
else{
	$diff = time()-$_SESSION['time'];
	$diff = $mytime-$diff;
	$hours = floor($diff/60);
	$minute = (int)($diff/60);
	$second = $diff%60;
	
	$show = "Thời gian còn lại: 0".$hour." giờ ".$minute." phút ".$second ." giây";
	
	if($diff==0 || $diff<0)
	{
		echo'<p style="margin-left:50px; font-size: 16px">Hết thời gian</p>';
		}
		else{
			echo '<p style="margin-left:50px; font-size: 16px">'. $show.'</p>';
			}
}
?>


<table width="73%" border="1px" align="center">
<tr style="background-color:#E6E6FA">
    <th>Tên sinh viên</th>
    <th>Mã số sinh viên</th>
    <th>Lớp</th>
	 <th>Trạng thái</th>
	 <th>Ngày điểm danh</th></tr>
<tr>	
<td> <?php echo $ten ;?></td>
<td> <?php echo $masv ;?></td>
<td> <?php echo $lop ;?></td>
<td>
<input type="radio" name="trangthai" value="Có mặt" <?php if( $p->luachon("select trangthai from taikhoan where id='$iduser' limit 1")=="Có mặt"){ echo"checked";}?>/>Có mặt &nbsp;&nbsp;&nbsp;&nbsp;  
<input type="radio" name="trangthai" value="Vắng" <?php if( $p->luachon("select trangthai from taikhoan where id='$iduser' limit 1")=="Vắng"){ echo"checked";}?>/>Vắng &nbsp;&nbsp;&nbsp;&nbsp;

</td> 
<td>
<input type="datetime-local" name="thoigian" value="<?php $p->luachon("select thoigian from taikhoan where id='$iduser' limit 1");?>"/></td>
</tr>
</table>
    <tr>
    <td colspan="2" align="center">
       <input class="diemdanh" type="submit" name="nut" id="nut" value="Xác nhận điểm danh" /> 
    </td>
  </tr>
<p style="margin-left: 250px"><a href="ptud.php"><button type="button">Trở về</button></a></p>
<br>

  <?php

	switch($_POST['nut'])
  {	
		case'Xác nhận điểm danh';
	{
	$idsua=$_REQUEST['id'];
	$trangthai=$_REQUEST['trangthai'];
	$thoigian=$_REQUEST['thoigian'];
	$diff = time()-$_SESSION['time'];
	$diff = $mytime-$diff;
	$hours = floor($diff/60);
	$minute = (int)($diff/60);
	$second = $diff%60;
	$show = $hour.":".$minute.":".$second;
		if($idsua>0 and $diff >0){
		
			if($p->themxoasua("UPDATE taikhoan set  trangthai='$trangthai',thoigian='$thoigian' where id='$idsua' limit 1")==1)
			{	
			
			echo '<p style="margin-left: 700px; color:#09F; font-size: 20px">Điểm danh thành công </p>';
			}
			else
		{	
			echo'Điểm danh không thành công';
			echo $show;
			}
	}
	if($diff==0||$diff<0)
	{ echo '<p style="margin-left: 700px; color: #933; font-size: 20px">Điểm danh không thành công do quá hạn 2 phút</p>';
	}
	else{echo '';}

	
	
			
		break;
  	}
  }
?>

<hr>

</form>
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
  background-color:#fff;
}
.diemdanh{
	background:#399;
	outline:none;
	border:none;	
	border-radius:5px;
	width:200px;
	height:40px;
	margin: 50px 0px 0px 600px;
	font-weight:bold;
	
	
    
}
#show{
	margin-left:80px}
.diemdanh:hover{
	background:#099;
	color: #fff;
	cursor:pointer;}
a:hover{
	
	color:#900;
	cursor:pointer}
	button{
  background:#B22222;
  color:#fff;
  border: 2px solid #B22222;
  font-weight:bold;
  border-radius: 5px;
  position:relative;
  height:40px;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
button:hover{
  background:#B22222;
  color:#FFF ;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#show").load("diemdanh.php");
	},1000);
});
</script>
