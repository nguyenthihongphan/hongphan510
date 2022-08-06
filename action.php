<!doctype html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>Action</title>
</head>

<body>
	<?php
    // Kết nội CSDL
    $host = "localhost";
    $user = "daohuynh";
    $password = "123456";
    $dbname = "doan";
	
    
    $con = mysqli_connect($host, $user, $password,$dbname);
	mysqli_set_charset($con, 'UTF8');
    // Check connection
    if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    }
		
	
    // Kiểm tra button
    if(isset($_POST['upload'])){
    
    // Dung lượng cho phép upload lên
    $maxsize = 10485760; // 5MB
    
    // Lưu vào thư mục trên máy tính
	
    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . $_FILES["file"]["name"];
	$layid_hd= $_REQUEST['id'];

	
    $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Định dạng mở rộng
    $extensions_arr = array("mp4","avi","3gp","mov","mpeg","jpg","jpeg","png","gif","docx","pdf");
    
    if( in_array($videoFileType,$extensions_arr) ){
    
    // Điều kiện kiểm tra dung lượng file
    if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
    echo "<script>alert('File quá lớn (>10 MB)! Vui lòng upload file nhỏ hơn!')</script>";
    }else{
    // Tiếp hành Upload
    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
    // Ghi dữ liệu vào Database
    $query = "INSERT INTO baocao(ten,name,location,idhd,date) VALUES('".$ten."','".$name."','".$target_file."','".$layid_hd."' ,NOW())";
	
    
    $query = mysqli_query($con,$query);
    if($query)
    {
		echo "<script>alert('Upload thành công!')</script>";
		 echo "Tên: ".$name."<br>";		 
    }
    }
    }
    
    }else{
    	echo "<script>alert('Lỗi định dạng!')</script>";
                    echo header("refresh: 0; url = 'baocaohdnk.php'");
					
    }
    
    }
    ?>
</body>
</html>