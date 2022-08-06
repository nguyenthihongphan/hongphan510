<?php
include ("./classes/clsupload.php");
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
	
	public function load_ds_matkhau($sql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql, $link);
		mysql_close($link); //chạy xong đóng kết nối
		$i=mysql_num_rows($ketqua);  ///chay  ra ket qua hang
		if($i>0)
		{
			echo ' <table width="1064" border="1" align="center">
					<tr>
					  <td colspan="8" style="text-align:center"><strong>Mật khẩu đã cấp</strong></td>
					</tr>
					<tr>
					  <td width="68" align="center"><strong>STT</strong></td>
					  <td width="196" align="center"><strong>Mật khẩu</strong></td>
					</tr>';
					$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['id'];
				$mkhau=$row['password'];
				echo'  <tr align="center" valign="middle" style="text-align:center">
						  <td align="center"><a href="?id='.$id.'">'.$dem.'</a></td>
						  <td align="center"><a href="?id='.$id.'">'.$mkhau.'</a></td>
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