
<div class="container" style="width: 30%;">
		<?php
			if ($_SERVER["REQUEST_METHOD"]=="POST"){
			$username = $_POST['username'];
			$password = $_POST['password'];

				$sql = "select * from khachhang where username = '$username' and password = '$password'";
				$rows = $db ->query($sql);
				$rs = $rows ->fetch();
				if (!empty($rs)) {
					# code...
					$_SESSION['login_member'] = 'ok';
					$_SESSION['username'] = $username;
					header('location: index.php');
				}
				else{
					echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!')</script>";
				}
			}
	 ?>
	<form method="POST" action="">
		<label>Tên đăng nhập: </label><br>
		<input type="text" name="username" placeholder="Nhập tài khoản..." required>
		<label>Mật khẩu: </label><br>
		<input type="password" name="password" placeholder="Nhập password" required>
		<input type="checkbox" name="checkbox" checked="checked"> Nhớ mật khẩu<br>
		<button type="submit" name="login" class="login">Đăng nhập</button>
	</form>
</div>