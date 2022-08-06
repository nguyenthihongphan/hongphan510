
<?php
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

     <title>Tai khoan giảng viên</title>

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
               
               
                    Quản lý tài khoản giảng viên
                    <form id="form1" name="form1" method="post" action="">
  <table width="600" border="1" align="center">
    <tr>
      <td colspan="2" align="center"><strong>Tài khoản người dùng</strong></td>
    </tr>
    <tr>
      <td width="162">Tên người dùng</td>
      <td width="422" align="left"><label for="txtten"></label>
      <input name="txtten" type="text" id="txtten" value="<?php echo $p->chonlay("select ten from giangvien where id='$layid' limit 1")?>" />
      <label for="txtid"></label>
      <input name="txtid" type="hidden" id="txtid" value="<?php echo $layid;?>" /></td>
    </tr>
    <tr>
      <td>Tên tài khoản</td>
      <td align="left"><label for="txttk"></label>
      <input name="txttk" type="text" id="txttk" value="<?php echo $p->chonlay("select user from giangvien where id='$layid' limit 1")?>" /></td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td align="left"><label for="txtpass"></label>
      <input name="txtpass" type="text" id="txtpass" value="<?php echo $p->chonlay("select password from giangvien where id='$layid' limit 1")?>" /></td>
    </tr>
    <tr>
      <td>Phân quyền</td>
      <td align="left"><label for="txtphanquyen"></label>
      <input name="txtphanquyen" type="text" id="txtphanquyen" value="<?php echo $p->chonlay("select phanquyen from giangvien where id='$layid' limit 1")?>" /></td>
    </tr>
    <tr style="text-align:center">
      <td colspan="2" align="center"><input type="submit" name="nut" id="nut" value="Thêm tài khoản" />
      <input type="submit" name="nut" id="nut" value="Xóa tài khoản" />
      <input type="submit" name="nut" id="nut" value="Sửa tài khoản" /></td>
    </tr>
  </table>
</form>
<?php
switch($_POST['nut'])
{
	case'Thêm tài khoản':
	{	
		$tengv=$_REQUEST['txtten'];
		$username=$_REQUEST['txttk'];
		$pass=$_REQUEST['txtpass'];
		$phanquyen=$_REQUEST['txtphanquyen'];
		if($username>0)
		{
				if($p->themxoasua("INSERT INTO giangvien(ten,user,password,phanquyen)VALUES( '$tengv', '$username', '$pass','$phanquyen')")==1)
				{
					echo 'Thêm tài khoản thành công.';
				}
				else{
					echo'Thêm tài khoản không thành công.';
					}
				}else
				{
					echo 'Thêm tài khoản không thành công.';
				}
		
	}break;
	case'Xóa tài khoản';
	{
		$idxoa=$_REQUEST['txtid'];
		if($idxoa>0)
		{
			if($p->themxoasua("delete from giangvien where id='$idxoa' limit 1")==1)
			{
				echo'Xóa tài khoản thành công.';
			}
			else
			{
				echo'Xóa không thành công';
			}
		}
		else
		{
			echo'Vui lòng chọn tài khoản cần xóa';
		}
		break;	
	}
	case'Sửa tài khoản';
	{
		$idsua=$_REQUEST['txtid'];
		$tengv=$_REQUEST['txtten'];
		$username=$_REQUEST['txttk'];
		$pass=$_REQUEST['txtpass'];
		$phanquyen=$_REQUEST['txtphanquyen'];
		if($idsua>0)
		{
			if($p->themxoasua("UPDATE giangvien SET ten='$tengv', user= '$username', password='$pass',phanquyen='$phanquyen' WHERE id='$idsua' LIMIT 1")==1)
				{
				echo 'Sửa tài khoản thành công.';
			}
			else
			{
				echo'Sửa không tài khoản thành công';
			}
		}
		else
		{
			echo'Vui lòng chọn tài khoản cần sửa';
		}
		break;	
	}
}

?>
<hr/>
<?php
$p->load_ds_gv("select * from giangvien order by id desc")
?>
<br>
 <p style=" margin-left:250px"><a href="admin.php"><input type="submit" class="return" value="Trở về"/></a></p>
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
<style>
td{
	height: 30px;
}
th{
	height: 20px;
}
#nut{
  background:#36bea6 ;
  color:#FFF;
  border: 2px solid #1AAB8A;
  font-weight:bold;
  border-radius: 5px;
  position:relative;
  height:40px;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
#nut:hover{
  background:#FFF;
  color:#1AAB8A ;
}
button:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  awidth:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
#nut:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
#nut:hover:before,button:hover:after{
  awidth:100%;
  transition:800ms ease all;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color:#F5F5F5;
}
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
  background:#B22222;
  color:#fff;
}
</style>
