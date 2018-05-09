<?php
include_once("lib/connect.php");
//session_start();
if(isset($_POST['dangky']))
{
	$username = $_POST['n_username'];
	$email = $_POST["n_email"];
	$pass = md5($_POST['n_pass']);
	$sdt = $_POST['n_sdt'];
	$dc = $_POST['n_diachi'];
	/*echo $username.'<br/>';
	echo $email.'<br/>';
	echo $pass.'<br/>';
	echo $sdt.'<br/>';
	echo $dc.'<br/>';
	exit();*/
	
	if(empty($username) or empty($email) or empty($pass) or empty($sdt) or empty($dc))
		{
			$error  = "Bạn chưa nhập đủ thông tin";
		}
	else
		if(strlen($pass)<6 or strlen($pass)>50) $error_mk="Mật khẩu từ 6-50 kí tự";			
	if(!is_numeric($sdt)) $error_dt="Không phải sđt";
	//if(!is_numeric($username)&&preg_match('/[a-zA-Z ]/',$username))
	//echo "dung"; else 
		//$error_ten="Tên người dùng không dấu, không chứa kí tự đặc biệt và số";
	if(!isset($error)&&!isset($error_dt)&&!isset($error_mk))
	{
		//$email = $_POST["n_email"];
		$sql="select * from user where email = '$email' or username='$username'";//or email=:email
		$stmt=$pdo->prepare($sql);		
		$u=$stmt->fetchAll();
		if(count($u)>0)
			{
				$error1="Tên người dùng hoặc email đã được sử dụng";
				echo"<script>alert('Tên người dùng hoặc email đã được sử dụng');window.location.href='index.php?p=dnhapvadki'</script>";	
			}
		else
			{				
				//chen dl
				$r= $pdo->exec("insert into user values(default,'$pass', '$username', '$email', '$dc', '$sdt',2)");
				if($r){
				echo"<script>alert('Đăng ký thành công!Mời bạn đăng nhập');window.location.href='index.php?p=dnhapvadki'</script>";			}	
			}		
	}
}
	?>			
	<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Đăng nhập</strong></span></h4>
						<form action="checkdn.php" method="post">
							
							<fieldset>
								<div class="control-group">
									<label class="control-label">Tên người dùng:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" id="username" name="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Mật khẩu:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit"  name="dangnhap" value="Đăng nhập">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>đăng ký thành viên</strong></span></h4>
						<form action="" method="post" class="form-stacked">
                        <?php if(isset($error)) {?><p style="color:#F00"><?php echo $error ?></p><?php }?>
							<fieldset>
								<div class="control-group">
									<label class="control-label">Tên người dùng:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" name="n_username" class="input-xlarge">
                                         <?php if(isset($error_ten)) {?><div style="color:#F00"><?php echo $error_ten ?></div><?php }?>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email:</label>
									<div class="controls">
										<input type="email" placeholder="Enter your email" name="n_email" class="input-xlarge">
										<?php if(isset($error1)) {?><div style="color:#F00"><?php echo $error1?></div><?php }?>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Mật khẩu:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name="n_pass" class="input-xlarge">
                                        <?php if(isset($error_mk)) {?><div style="color:#F00"><?php echo $error_mk ?></div><?php }?>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Số điện thoại:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your phone" name="n_sdt" class="input-xlarge">
                                         <?php if(isset($error_dt)) {?><div style="color:#F00"><?php echo $error_dt ?></div><?php }?>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Địa chỉ:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your address" name="n_diachi" class="input-xlarge">
									</div>
								</div>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit"  name="dangky" value="Đăng ký"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
	</section>						

		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>