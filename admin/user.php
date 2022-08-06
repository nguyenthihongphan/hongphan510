
<?php
session_start();
if(isset($_SESSION['id']) &&isset($_SESSION['user'])&&isset($_SESSION['pass']) &&isset($_SESSION['phanquyen']))
{
    include("adminlogin.php");
    $q= new adminlogin();
    $q->confirmlogin($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['phanquyen']);
    }
else
{
    header('location:login.php');
    }
include("clstmdt.php");
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

     <title>Tai khoan sinh vien</title>

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
     <link rel="stylesheet" href="css/css.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/admin_style.css">

     

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
                         <li><a href="#testimonial" class="smoothScroll">Thông báo</a></li>
                         <li><a href="#contact" class="smoothScroll">Liên hệ</a></li>
                         <li><a href="" class="smoothScroll">Ngôn ngữ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="login.php"><i class="fa fa-user"><?php echo $tenadmin ; ?></i> Đăng xuất</a></li>
                    </ul>
               </div>

          </div>          
     </section>

 <div id="admin-heading-panel">
            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading">Admin Menu</div>
                        <div class="menu-items">
                            <ul>
                                <li><a href="admin.php">Trang chủ</a></li>
                                <li><a href="">Tài khoản</a>                                	
                                        <ul>
                                            <li>
                                                <a href="dstksv.php">Sinh viên</a>
                                            </li>
                                            <li>
                                                <a href="dstkgv.php">Giảng viên</a>
                                            </li>
                                        </ul>
                                <li><a href="taolhp.php">Lớp học phần</a></li>
                                <li><a href="#">Phản hồi</a></li>
                             
                            </ul>
                        </div>
                    </div>
               <div class="main-content">
               <h1>Danh sách tài khoản</h1>
               <div class="panel panel-primary">
               <div class="panel-heading">
                    Quản lý tài khoản sinh viên
                    <form method="get">
                         <input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
                    </form>
               </div>
               <div class="panel-body">
                   <?php
				   $p->load_ds_sv("select * from taikhoan ")
				   ?>
                    <button class="btn btn-success" onclick="window.open('adduser.php', '_self')">Thêm tài khoản</button>
               </div>
          </div>
     </div>
</div>
</div>


  
  <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/navAccordion.js"></script>
<script>
        jQuery(document).ready(function(){      
            jQuery('.mainNav').navAccordion({
                expandButtonText: '<i class="fa fa-plus"></i>',
                collapseButtonText: '<i class="fa fa-minus"></i>',
                buttonPosition: "left",
                buttonWidth: "20%"
            }, 
            function(){
                console.log('Callback')
            });
            
        });
    </script>
    <script type="text/javascript">
          function deleteStudent(id) {
               option = confirm('Bạn có muốn xoá  không')
               if(!option) {
                    return;
               }

               console.log(id)
               $.post('deleteUser.php', {
                    'id': id
               }, function(data) {
                    alert(data)
                    location.reload()
               })
          }
     </script>

</body>
</html>