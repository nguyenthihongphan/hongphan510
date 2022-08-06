<?php
class adminlogin
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
		public function mylogin($user,$pass)
		{
			$pass=md5($pass);
			$link=$this->connect();
			$sql="select admin, adminuser, adminpass, phanquyen from admin where adminuser='$user' and adminpass='$pass' limit 1";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i==1)
			{
					while($row=mysql_fetch_array($ketqua))
					{
						$id=$row['admin'];
						$user=$row['adminuser'];
						$password=$row['adminpass'];
						$phanquyen=$row['phanquyen'];
						session_start();
						$_SESSION['id']=$id;
						$_SESSION['user']=$user;
						$_SESSION['pass']=$password;
						$_SESSION['phanquyen']=$phanquyen;
						return 1;
						}
				}
			else
			{
				return 0;
				}
			}
		public function confirmlogin($id,$user,$pass,$phanquyen)
		{
			$link=$this->connect();
			$sql="select admin from admin where admin='$id' and adminpass='$pass' and phanquyen='$phanquyen' limit 1";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i!=1)
			{
					header("location:login.php");
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
	

}
?>