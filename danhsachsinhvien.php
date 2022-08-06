<?php
class tmdt
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
		
	}	public function themxoasua($sql)
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
		public function load_ds_sv($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
					{	echo'<table width="73%" border="1" align="center">
					  <tr style="background-color:#96CDCD">
						
    <th style="text-align:center" >STT</th>
    <th style="text-align:center" >Mã sinh viên</th>
    <th style="text-align:center" >Tên sinh viên</th>
    <th style="text-align:center" >Lớp</th>
	<th style="text-align:center" >Số lần phát biểu</th>
	<th style="text-align:center" >Cập nhật</th>

					  </tr>';
			  			$dem=1;
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row['id'];
					$masv=$row['masv'];
					$hoten=$row['hoten'];
					$lop=$row['lop'];
					$phatbieu=$row['phatbieu'];
					
				echo'   <tr><td style="text-align:center" >'.$dem.'</td>
							<td style="text-align:center" >'.$masv.'</td>
							<td align="justify">'.$hoten.'</td>
							<td style="text-align:center" >'.$lop.'</td>
							<td style="text-align:center" >'.$phatbieu.'</td>
							<td style="text-align:center" ><a href="?id='.$id.'">Sửa</a></td>
  						</tr>';	
						  $dem++;																		 					}
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
			public function load_ds_hd($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
					{	echo'<table width="73%" border="1" align="center" >
					  <tr height="50px" style="background-color:#96CDCD">
						
    <th style="text-align:center" class="border-top-0">STT</th>
    <th style="text-align:center" class="border-top-0">Tên hoạt động</th>
    <th style="text-align:center" class="border-top-0">Nội dung</th>
    <th style="text-align:center" class="border-top-0">Hạn nộp</th>
	<th style="text-align:center" class="border-top-0">Đăng ký</th>
	

					  </tr>';
			  			$dem=1;
				while($row=mysql_fetch_array($ketqua))
				{
					$id= $row['id'];
					$tenhd=$row['tenhd'];
					$noidung=$row['noidung'];
					$han=$row['han'];
					
					
				echo'   <tr height="100px"><td width="50px" style="text-align:center; color: red; " ><a href="./hoatdongngoaikhoa.php?id='.$id.'">'.$dem.'</a</td>
							<td align="justify"><a href="./hoatdongngoaikhoa.php?id='.$id.'">'.$tenhd.'</a></td>
							<td align="justify" width="600px">'.$noidung.'</td>
							<td style="text-align:center">'.$han.'</td>
							<td style="text-align:center"><a href="baocaohdnk.php?id='.$id.'"><button type="button"> Tham gia</button></a></td>
							
  						</tr>';	
						  $dem++;																		 					}
				echo'</table>';
				}
		
			else
			{
				echo' Không có hoạt động ngoại khóa nào';
				
				}
		}
}
?>
