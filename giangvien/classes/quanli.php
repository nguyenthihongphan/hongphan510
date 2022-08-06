<?php
class quanli
{
		private function connect()
	{
		$con=mysql_connect("localhost","daohuynh","123456");
		
		if(!$con)
		{
			echo'Không kết nối cơ sở dữ liệu';
			exit();
			}
		else
		{
			mysql_select_db("doan");
			mysql_query("SET NAMES UTF8");
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
				
				$nh=$row['ngayhoc'];
				$th=$row['tiethoc'];
				$hk=$row['hocki'];
				$namh=$row['namhoc'];
				echo'  <tr>
							<td><a href="?id='.$id.'">'.$ma.'</a></td>
							<td><a href="?id='.$id.'">'.$ten.'</a></td>
							
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
			echo ' <table class="table v-middle" width="1064" border="1" align="center">
					
					<tr class="bg-light">
					  <th class="border-top-0"><strong>STT</strong></th>
					  <th class="border-top-0"><strong>Mã LHP</strong></th>
					  <th class="border-top-0"><strong>Tên LHP</strong></th>
					  <th class="border-top-0"><strong>Môn học</strong></th>
					 
					  <th class="border-top-0"><strong>Ngày học</strong></th>
					  <th class="border-top-0"><strong>Tiết học</strong></th>
					  <th class="border-top-0"><strong>Học kì</strong></th>
					  <th class="border-top-0"><strong>Năm học</strong></th>
					</tr>';
					$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$ma=$row['mahp'];
				$ten=$row['tenhp'];
				$monhoc=$row['monhoc'];
				
				$nh=$row['ngayhoc'];
				$th=$row['tiethoc'];
				$hk=$row['hocki'];
				$namh=$row['namhoc'];
				echo'  <tr valign="middle">
						  <td align="center"><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$dem.'</a></td>
						  <td><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$ma.'</a></td>
						  <td><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$ten.'</a></td>
						  <td><a href="ptud.php?id='.$id.'"><h4 class="m-b-0 font-16">'.$monhoc.'</a></td>
						  
						  <td><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$nh.'</a></td>
						  <td><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$th.'</a></td>
						  <td align="center"><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$hk.'</a></td>
						  <td align="center"><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$namh.'</a></td>
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
	
		public function loadsinhvien($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row['id'];
					$masv=$row['username'];
					$ten=$row['ten'];
					$lop=$row['lop'];
					$trangthai=$row['trangthai'];
					$thoigian=$row['thoigian'];
					echo '<div id="sinhvien">
							<div id="sinhvienm">'.$masv.'</div>
							<div id="sinhvient">'.$ten.'</div>
							<div id="sinhvienl">'.$lop.'</div>
							<div id="sinhvientt">'.$trangthai.'</div>
							<div id="sinhvientg">'.$thoigian.'</div>
							
						</div>';
												}
				}
			else
			{
				echo' Đang cập nhật sinh vien...';
				
				}
			}
		public function load_ds_sv($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
					{	echo'<table class="table v-middle">
					<thead>
					  <tr class="bg-light">
						
    <th class="border-top-0">STT</th>
    <th class="border-top-0">Mã sinh viên</th>
    <th class="border-top-0">Tên sinh viên</th>
    <th class="border-top-0">Lớp</th>
	 <th class="border-top-0">Trạng thái</th>
	 <th class="border-top-0">Thời gian điểm danh</th>

					  </tr>';
			  			$dem=1;
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row['id'];
					$masv=$row['username'];
					$ten=$row['ten'];
					$lop=$row['lop'];
					$trangthai=$row['trangthai'];
					$thoigian=$row['thoigian'];
					if($id=$ten){
					
				echo'   <tr><td> <h4 class="m-b-0 font-16">'.$dem.'</h4></td>
							<td> <h4 class="m-b-0 font-16">'.$masv.'</h4></td>
							<td>  <h4 class="m-b-0 font-16">'.$ten.'</h4></td>
							<td> <h4 class="m-b-0 font-16">'.$lop.'</h4></td>
							<td> <h4 class="m-b-0 font-16"><a href="?id='.$id.'">'.$trangthai.'</h4></td>
							<td> <h4 class="m-b-0 font-16">'.$thoigian.'</h4></td>
  						</tr>';	
						  $dem++;																		 					}
				}
				echo'</table>';
				}
		
			else
			{
				echo' Không có sinh viên';
				
				}
		}
		public function load_sv($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
					{	echo'<table class="table v-middle">
					<thead>
					  <tr class="bg-light">
						
    <th class="border-top-0">STT</th>
    <th class="border-top-0">Mã sinh viên</th>
    <th class="border-top-0">Tên sinh viên</th>
    <th class="border-top-0">Lớp</th>
	 <th class="border-top-0">Số lần phát biểu</th>
	 

					  </tr>';
			  			$dem=1;
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row['id'];
					$masv=$row['masv'];
					$hoten=$row['hoten'];
					$lop=$row['lop'];
					$phatbieu=$row['phatbieu'];
					
				echo'   <tr><td><h4 class="m-b-0 font-16">'.$dem.'</h4></td>
							<td><h4 class="m-b-0 font-16">'.$masv.'</h4></td>
							<td><h4 class="m-b-0 font-16">'.$hoten.'</h4></td>
							<td><h4 class="m-b-0 font-16">'.$lop.'</h4></td>
							<td><h4 class="m-b-0 font-16">'.$phatbieu.'</h4></td>
						
							
  						</tr>';	
						  $dem++;}
				echo'</table>';
				}
		
			else
			{
				echo' Không có sinh viên';
				
				}
		}
		public function luachon($sql)
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
		
public function load_ds_baocao($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
					{	echo'<table class="table v-middle">
					  <thead>
					  <tr class="bg-light">
						
    <th class="border-top-0">STT</th>
    <th class="border-top-0">Tên sinh viên</th>
    <th class="border-top-0">Tên file</th>
	 <th class="border-top-0">Thời gian nộp </th>
	 

					  </tr>';
			  			$dem=1;
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row['id'];
					$ten=$row['ten'];
					$name=$row['name'];
					$date=$row['date'];

				echo'   <tr><td><h4 class="m-b-0 font-16"><a href="?id='.$id.'">'.$dem.'</a></h4></td>
							<td><h4 class="m-b-0 font-16"><a href="?id='.$id.'">'.$ten.'</a></h4></td>
							
							<td><h4 class="m-b-0 font-16"> <a href="?id='.$id.'">'.$name.'</a></h4></td>
							<td><h4 class="m-b-0 font-16"><a href="?id='.$id.'">'.$date.'</a></h4></td>
  						</tr>';	
						  $dem++;																		 					}
				
		
				echo'</table>';
		
}
		
			else
			{
				echo' Không có sinh viên nộp báo cáo';
				
				}
		
		}
		public function load_ds_hd($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
					{	while($row=mysql_fetch_array($ketqua))
				{
					$id=$row['id'];
					$tenhd=$row['tenhd'];
					
					if($id==$idhd)
					{
						echo'<div  ><a href="../giangvien/xembaocao.php?id='.$id.'">'.$tenhd.'</a></div>  ';
						}
					else
					{
						echo'<div  ><a href="?id='.$id.'">'.$tenhd.'</a></div> ';
						}
				}
					}
					
				
			else
			{
				echo' không có dữ liệu';				
				}
			}


		public function ds_sv($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo'<table width="400" border="1">
						  <tr >
							<td>Mã sinh viên</td>
							<td>Tên sinh viên</td>
							
							<td>Lớp</td>
                            
						  </tr>';
			;
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$masv=$row['masv'];
				$hoten=$row['hoten'];
				
				$lop=$row['lop'];
				echo'  <tr>
							<td><a href="?id='.$id.'">'.$masv.'</a></td>
							<td><a href="?id='.$id.'">'.$hoten.'</a></td>
							
							<td><a href="?id='.$id.'">'.$lop.'</a></td>
							
						  </tr>';
				
			}
			echo'</table>';
		}
		else
		{
			echo'Không có dữ liệu.';
		}
	}
	public function load_dssv($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo ' <table class="table v-middle" width="1064" border="1" align="center">
					
					<tr class="bg-light">
					  <th class="border-top-0"><strong>STT</strong></th>
					  <th class="border-top-0"><strong>Mã sinh viên</strong></th>
					  <th class="border-top-0"><strong>Tên sinh viên</strong></th>
					  
					  <th class="border-top-0"><strong>Lớp</strong></th>
					  
					</tr>';
					$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				
				$id=$row['id'];
				$masv=$row['masv'];
				$hoten=$row['hoten'];
				
				$lop=$row['lop'];
				echo'  <tr valign="middle">
						  <td align="center"><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$dem.'</a></td>
						  <td><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$masv.'</a></td>
						  <td><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$hoten.'</a></td>
						  
						  <td><a href="?id='.$id.'"><h4 class="m-b-0 font-16">'.$lop.'</a></td>
						  
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
	
}?>

	
		