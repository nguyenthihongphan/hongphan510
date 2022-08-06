<?php
include ("clsupload.php");
class tmdt extends upfile
{
	private function connect()
	{
		$con=mysql_connect("localhost","daohuynh","123456");
		if(!$con)
		{
			echo 'Không thể kết nối csdl';
			exit();
		}
		else
		{
			mysql_select_db("doan");
			mysql_query("SET NAME UTF8");
			return $con;
		}
	}
	public function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysql_query($sql,$link))
		{
			return 1;
		}
		else
		{
			return 0;
		}
		
	}
	public function ds_lhp($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table width="400" border="1">
						  <tr >
							<td>Mã lớp học phần</td>
							<td>Tên lớp học phần</td>
							<td>Giảng viên phụ trách</td>
							<td>Ngày học</td>
                            <td>Tiết học</td>
							<td>Học kì</td>
                            <td>Năm học</td>


						  </tr>';
			;
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$ma=$row['mahp'];
				$ten=$row['tenhp'];
				$gvien=$row['giangvien'];
				$nh=$row['ngayhoc'];
				$th=$row['tiethoc'];
				$hk=$row['hocki'];
				$namh=$row['namhoc'];
				echo'  <tr>
							<td><a href="?id='.$id.'">'.$ma.'</a></td>
							<td><a href="?id='.$id.'">'.$ten.'</a></td>
							<td><a href="?id='.$id.'">'.$gvien.'</a></td>
							<td><a href="?id='.$id.'">'.$nh.'</a></td>
							<td><a href="?id='.$id.'">'.$th.'</a></td>
							<td><a href="?id='.$id.'">'.$hk.'</a></td>
							<td><a href="?id='.$id.'">'.$namh.'</a></td>
						  </tr>';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_lhp($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo ' <table width="1064" border="1" align="center">
					<tr>
					  <td colspan="8" align="center"><strong>Danh sách các lớp học phần</strong></td>
					</tr>
					<tr>
					  <td width="20" align="center"><strong>STT</strong></td>
					  <td width="106" align="center"><strong>Mã LHP</strong></td>
					  <td width="145" align="center"><strong>Tên LHP</strong></td>
					  <td width="150" align="center"><strong>Môn học</strong></td>
					  <td width="196" align="center"><strong>Giảng viên phụ trách</strong></td>
					  <td width="134" align="center"><strong>Ngày học</strong></td>
					  <td width="111" align="center"><strong>Tiết học</strong></td>
					  <td width="96" align="center"><strong>Học kì</strong></td>
					  <td width="100" align="center"><strong>Năm học</strong></td>
					</tr>';
					$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$ma=$row['mahp'];
				$ten=$row['tenhp'];
				$monhoc=$row['monhoc'];
				$gvien=$row['giangvien'];
				$nh=$row['ngayhoc'];
				$th=$row['tiethoc'];
				$hk=$row['hocki'];
				$namh=$row['namhoc'];
				echo'  <tr align="center" valign="middle">
						  <td align="center"><a href="?id='.$id.'">'.$dem.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$ma.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$ten.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$monhoc.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$gvien.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$nh.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$th.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$hk.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$namh.'</a></td>
						</tr>';
						$dem++;
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_taikhoan($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo ' <table width="1064" border="1" align="center">
					<tr>
					  <td colspan="8" style="text-align:center"><strong>Danh sách các tài khoản sinh viên</strong></td>
					</tr>
					<tr>
					  <td width="68" align="center"><strong>STT</strong></td>
					  <td width="200" align="center"><strong>Tên người dùng</strong></td>
					  <td width="145" align="center"><strong>Tên tài khoản</strong></td>
					  <td width="196" align="center"><strong>Mật khẩu</strong></td>
					  <td width="127" align="center"><strong>Phân quyền</strong></td>
					</tr>';
					$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$ten=$row['ten'];
				$tkhoan=$row['username'];
				$mkhau=$row['password'];
				$phanquyen=$row['phanquyen'];
				echo'  <tr align="center" valign="middle" style="text-align:center">
						  <td align="center"><a href="?id='.$id.'">'.$dem.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$ten.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$tkhoan.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$mkhau.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$phanquyen.'</a></td>
						</tr>';
						$dem++;
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_ds_gv($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo ' <table width="1064" border="1" align="center">
					<tr>
					  <td colspan="8" style="text-align:center"><strong>Danh sách các tài khoản giảng viên</strong></td>
					</tr>
					<tr>
					  <td style="text-align:center" width="10" align="center"><strong>STT</strong></td>
					  <td width="190" align="center"><strong>Tên người dùng</strong></td>
					  <td width="140" style="text-align:center"><strong>Tên tài khoản</strong></td>
					  <td width="180" ><strong>Mật khẩu</strong></td>
					  <td width="40" style="text-align:center" align="center"><strong>Phân quyền</strong></td>
					</tr>';
					$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$tengv=$row['ten'];
				$tkhoan=$row['user'];
				$mkhau=$row['password'];
				$phanquyen=$row['phanquyen'];
				echo'  <tr align="center" valign="middle">
						  <td align="center"><a href="?id='.$id.'">'.$dem.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$tengv.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$tkhoan.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$mkhau.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$phanquyen.'</a></td>
						</tr>';
						$dem++;
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	
	public function chonlay($sql)
	{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			$kq='';
			if($i>0)
			{
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row[0];
					$kq=$id;
				}
			}
			return $kq;
		}
}
?>