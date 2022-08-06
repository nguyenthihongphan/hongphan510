
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
$iduser =$_SESSION['id'];
$ten =$q->luachon("select tenadmin from admin where admin='$iduser' limit 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Tạo lớp học phần</title>

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
     <br>
     <br>
<form id="form1" name="form1" method="post" action=""  style="font-size:14px" action="taolhp.php">
  <table width="600" border="1" align="center">
    <tr>
      <td width="180">Mã lớp học phần</td>
      <td width="404"><label>
        <input name="txtmahp" type="text" id="txtmahp" value="<?php echo $p->chonlay("select mahp from lhp where id='$layid' limit 1")?>" />
      </label>
        <label for="txtid"></label>
      <input name="txtid" type="hidden" id="txtid" value="<?php echo $layid;?>" /></td>
    </tr>
    <tr>
      <td>Tên môn học</td>
      <td><label>
        <input name="txtmonhoc" type="text" id="txtmonhoc" value="<?php echo $p->chonlay("select monhoc from lhp where id='$layid' limit 1")?>" />
      </label></td>
    </tr>
    <tr>
      <td>Tên lớp học phần</td>
      <td><label>
        <input name="txttenlhp" type="text" id="txttenlhp" value="<?php echo $p->chonlay("select tenhp from lhp where id='$layid' limit 1")?>" />
      </label></td>
    </tr>
    
    <tr>
      <td>Giảng viên phụ trách</td>
      <td><label>
        <input name="txtgv" type="text" id="txtgv" value="<?php echo $p->chonlay("select giangvien from lhp where id='$layid' limit 1")?>" />
      </label></td>
    </tr>
    <tr>
      <td>Ngày học </td>
      <td><label>
        <input name="txtngay" type="date" id="txtngay" value="<?php echo $p->chonlay("select ngayhoc from lhp where id='$layid' limit 1")?>" />
      </label></td>
    </tr>
    <tr>
      <td>Tiết học</td>
      <td><label>
        <input name="txttiet" type="text" id="txttiet" value="<?php echo $p->chonlay("select tiethoc from lhp where id='$layid' limit 1")?>" />
      </label></td>
    </tr>
    <tr>
      <td>Học kì</td>
      <td><label>
        <input name="txthocki" type="text" id="txthocki" value="<?php echo $p->chonlay("select hocki from lhp where id='$layid' limit 1")?>" />
      </label></td>
    </tr>
    <tr>
      <td>Năm học</td>
      <td><label>
        <input name="txtnam" type="text" id="txtnam" value="<?php echo $p->chonlay("select namhoc from lhp where id='$layid' limit 1")?>" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center" >
      <input type="submit" name="nut" id="nut" value="Tạo" />
      <input type="submit" name="nut" id="nut" value="Xóa" />
      <input type="submit" name="nut" id="nut" value="Sửa" /></td>
    </tr>
  </table>
</form>
<?php
switch($_POST['nut'])
{
	case'Tạo':
	{
		$mahp=$_REQUEST['txtmahp'];
		$monhoc=$_REQUEST['txtmonhoc'];
		$tenhp=$_REQUEST['txttenlhp'];
		$gv=$_REQUEST['txtgv'];
		$ngay=$_REQUEST['txtngay'];
		$tiet=$_REQUEST['txttiet'];
		$hocki=$_REQUEST['txthocki'];
		$nam=$_REQUEST['txtnam'];
		if($mahp>0){
				if($p->themxoasua("INSERT INTO lhp(mahp,monhoc,tenhp,giangvien,ngayhoc,tiethoc,hocki,namhoc)VALUES( '$mahp','$monhoc', '$tenhp', '$gv', '$ngay','$tiet','$hocki','$nam')")==1)
				{
					echo "<script>alert('Tạo thành công lớp học phần mới!')</script>";
				}
				else{
					echo "<script>alert('Tạo lớp học phần không thành công!')</script>";
					}
				}else
				{
					echo "<script>alert('Tạo lớp học phần không thành công!')</script>";
				}
		
	}break;
	case'Xóa';
	{
		$idxoa=$_REQUEST['txtid'];
		if($idxoa>0)
		{
			if($p->themxoasua("delete from lhp where id='$idxoa' limit 1")==1)
			{
				echo' ';
			}
			else
			{
				echo "<script>alert('Xóa không thành công!')</script>";
			}
		}
		else
		{
			echo "<script>alert('Vui lòng chọn lớp học phần để xóa!')</script>";;
		}
		break;	
	}
	case'Sửa';
	{
		$idsua=$_REQUEST['txtid'];
		$mahp=$_REQUEST['txtmahp'];
		$monhoc=$_REQUEST['txtmonhoc'];
		$tenhp=$_REQUEST['txttenlhp'];
		$gv=$_REQUEST['txtgv'];
		$ngay=$_REQUEST['txtngay'];
		$tiet=$_REQUEST['txttiet'];
		$hocki=$_REQUEST['txthocki'];
		$nam=$_REQUEST['txtnam'];
		if($idsua>0)
		{
			if($p->themxoasua("UPDATE lhp SET mahp='$mahp', monhoc='$monhoc', tenhp= '$tenhp', giangvien='$gv', ngayhoc='$ngay', tiethoc='$tiet',hocki='$hocki', namhoc='$nam'  WHERE id='$idsua' LIMIT 1")==1)
			{
				echo "<script>alert('Sửa thành công!')</script>";
			}
			else
			{
				echo "<script>alert('Sửa không thành công!')</script>";
			}
		}
		else
		{
			echo "<script>alert('Vui lòng chọn lớp học phàn để sửa!')</script>";
		}
		break;	
	}
}

?>
<hr/>
<?php
$p->load_ds_lhp("select * from lhp order by id desc")
?>
<br>
 <p style=" margin-left:250px"><a href="admin.php"><input type="submit" class="return" value="Trở về"/></a></p>

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
    width: 90%;
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