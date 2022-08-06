<?php
	$conn = mysqli_connect("localhost","daohuynh","123456","doan");
	$id = $_GET["id"];
	
	//câu lệnh delete
	$sql = "delete from hoatdong where id='$id'";
	if (mysqli_query($conn,$sql))//Nếu thành công chuyển về file hoatdong ngoaikhoa
	{
		header('location: hoatdong.php');
	}
	else{//lỗi
		$result = "Xóa chưa thành công". mysqli_error($conn);
	}
//ngắ kết nối
mysqli_close($conn);
?>