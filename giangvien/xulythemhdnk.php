<?php
	$conn = mysqli_connect("localhost","daohuynh","123456","doan");
	// kiểm tra khi người dùng submit form
	if (isset($_POST["btnSave"]))
	{
		//Lấy dữ liệu trên form => Lưu vào biến
		$id =$_POST["id"];
		$tenhd = $_POST["tenhd"];
		$noidung = $_POST["noidung"];
		$han = $_POST["han"];
	}
	//truy vấn dữ liệu
	$sql = "insert into hoatdong values('$id','$tenhd','$noidung','$han')";
	if (mysqli_query($conn,$sql))//Nếu thành công chuyển về file hoatdong ngoaikhoa
	{
		header('location: hoatdong.php');
	}
	else{//lỗi
		$result = "Lỗi thêm mới". mysqli_error($conn);
	}
?>