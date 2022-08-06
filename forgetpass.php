<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quên mật khẩu </title>

</head>

<body>
<p>Để lấy lại mật khẩu, hãy cung cấp kí danh hay thư điện của bản vào bên dưới. Nếu bạn được tìm thấy trong CSDL, một thư điện sẽ được gửi đến bạn, cùng với những hướng dẫn về cách tái truy cập.</p>
<p>Tìm kiếm bằng tên tài khoản</p>
<label for="name"> Tên tài khoản</label> &nbsp;
<input name="txtname">
<br>
<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button type="button">Tìm kiếm</button>
<br>
<hr>
<p>Tìm kiếm bằng thư điện tử</p>
<label for="name"> Thư điện tử</label> &nbsp;
 
<input name="txtmail">
<br>
<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button type="button">Tìm kiếm</button>
<hr>
</body>
</html>
<style>
body{
	margin-left:100px;
	margin-right:100px;
	margin-top:50px;
}
button{
  background:#099 ;
  color:#FFF;
  border: 2px solid ;
  border-radius: 5px;
  position:relative;
  height:40px;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
button:hover{
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
button:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
button:hover:before,button:hover:after{
  awidth:100%;
  transition:800ms ease all;
}

</style>
