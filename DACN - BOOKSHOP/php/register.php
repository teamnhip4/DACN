<div class="container" style="width: 30%">
	<?php
                      
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
               
                if(empty($_POST['username']))
                {
                    $error[]='tendn';

                }
                else
                {
                    $tendn=$_POST['username']; 
                }
                if(empty($_POST['password']))
                {
                    $error[]='matkhau';
                }
                else
                {
                    $matkhau=$_POST['password']; 
                }
                if(empty($_POST['hoten']))
                {
                    $error[]='hoten';
                }
                else
                {
                    $hoten=$_POST['hoten']; 
                }
                if(empty($_POST['diachi']))
                {
                    $error[]='diachi';
                }
                else
                {
                    $diachi=$_POST['diachi']; 
                }
                 if(empty($_POST['email']))
                {
                    $error[]='email';
                }
                else
                {
                    $email=$_POST['email'];
                }
                if(empty($_POST['sdt']))
                {
                    $error[]='sdt';
                }
                else
                {
                    $sdt=$_POST['sdt']; 
                }
                if (empty($error))
                {             
                    $query = "insert into khachhang(username, password, hoten ,diachi , email, sdt, ngaytao) values('$tendn', '$matkhau', '$hoten', '$diachi', '$email', '$sdt', now())";  
                    $count=$db->exec($query);
                    if($count>0)
                    {
                      $_SESSION['login_member']='ok';
                                 $_SESSION['username'] = $username;

                       // header("location:?page=login");
                       echo "
                       <script>"
                        . "if(confirm('Đăng ký thành viên thành công')==true)"
                            . "{"
                               . "window.location='index.php'"
                               . "}
                        </script>"     ; 

                    }
                }
            }
        ?>
	<form method="POST" action="">
		<label>Tên đăng nhập:</label><br>
		<input type="text" name="username" placeholder="Nhập tài khoản..." required>
		<label>Password:</label><br>
		<input type="password" name="password" placeholder="Nhập mật khẩu">
		<label>Họ và tên:</label><br>
		<input type="text" name="hoten" placeholder="Nhập họ tên..." required>
		<label>Địa chỉ:</label><br>
		<input type="text" name="diachi" placeholder="Nhập địa chỉ..." required>
		<label>Email:</label><br>
		<input type="email" name="email" placeholder="Nhập email..." required>
		<label>Số điện thoại:</label><br>
		<input type="text" name="sdt" placeholder="Nhập số điện thoại">
		<button type="submit" name="register" class="login">Đăng ký</button>
	</form>
</div>