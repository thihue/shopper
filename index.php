	<?php
	session_start();
	include_once("lib/connect.php");
	if ( isset($_GET["p"]))
		$p = $_GET["p"];
	else
		$p = "";
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Xinh Xinh Shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
		<link href="themes/css/aaa.css" rel="stylesheet"/> 
		 
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		 <link href="themes/css/aaa.css" rel="stylesheet"/> 
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>
        <link href="themes/css/aaa.css" rel="stylesheet"/>
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
		
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>	
	</head>
    <body>
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form action="" method="get" class="search_form" name="tim">
						<input type="text" name="search" id="search" class="input-block-level search-query" Placeholder="Tìm Kiếm" onchange="tim.submit()">					
					</form> 
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">											
							<li><a href="index.php?p=giohang">Giỏ hàng</a></li>
							<li><a href="index.php?p=thanhtoan">Thanh toán</a></li>
							<?php 
							if(!isset($_SESSION['idUser']))
								{
									echo'<li><a href="index.php?p=dnhapvadki">Đăng nhập | Đăng ký</a></li>';										
								}
							else
								{
									if($_SESSION['id_group']==1)
									{
										echo'<li><a href="quantri/quantri.php">Quản trị</a></li>';										
									}
									echo'<li><a href="dangxuat.php">Đăng xuất</a></li>';
									echo'<li><strong>Hello '.$_SESSION['username'].'</strong></li>';								
								}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
                        <li><a href="index.php">Trang Chủ</a></li>
						<?php 
						$sql="select id_muc, tenmuc from mucsanpham";
						$stmt=$pdo->prepare($sql);
						$stmt->execute();
						while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 
						$id_muc=$row['id_muc'];
						?>						
							<li><a href="index.php?p=sanpham&id=<?php echo $row['id_muc']?>"><?php echo $row['tenmuc']; ?></a>
								<ul>
									<?php								
									$sql="select tenloai,maloai from loaisanpham where id_muc='$id_muc'";
									$stmt2=$pdo->prepare($sql);
									$stmt2->execute();
									while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){ ?>									
										<li><a href="index.php?p=sanpham&maloai=<?php echo $row2['maloai']?>"><?php echo $row2['tenloai']; ?></a></li>																			
									<?php } ?>
								</ul>								
							</li>
						<?php } ?>
						<li><a href="index.php?p=lienhe">Liên Hệ</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/baner-gaugau-8-2017-a.jpg" alt="" />
						</li>
                        <li>
							<img src="themes/images/carousel/baner-gaugau-8-2017-b.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/baner-gaugau-8-2017-c.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			
			<section class="main-content">
				<div class="row" id="rowsp">
					<div class="span12" style="float=left">													
						<?php
						if (isset($_GET['search'])) 
							{                    
								$search =$_GET['search'];            
								if (empty($search)) 
									{
										echo "Yêu cầu nhập dữ liệu vào ô trống";
									} 
								else
								{	?>
										<section class="main-content">				
											<div class="row">						
												<div class="span12">					
													<ul class="thumbnails listing-products">
														<hr>
														<?php														
														$sql= " select * from sanpham where tensp like '%$search%' or dongia like '%$search%'";
														//phan trang
														$trang=1;												
														if(isset($_GET['trang'])) $trang=$_GET['trang'];
														$vitri=($trang-1)*so_sp_1_trang;
														$sql.="ORDER BY dongia DESC limit ".$vitri.",".so_sp_1_trang;					
														$stmt=$pdo->prepare($sql);
														$stmt->execute();													
															while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
																<li class="span3">
																	<div class="product-box">
																		<span class="sale_tag"></span>
																		<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
																		<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp']; ?></a><br/>
																		<p class="price"><?php echo $row['dongia']; ?>&#8363</p> 
																	</div>
																</li>
														<?php }	?>															
													</ul>						
													<hr>					
													<div class="pagination pagination-small pagination-centered">
														<ul>
															<?php 															
																$sql="select count(*) from sanpham where tensp like '%$search%'";															
																$stmt=$pdo->query($sql);
																$tong=$stmt->fetchColumn(0);
																//
																if($tong==0) 
																	echo "Không có sản phẩm cho từ khóa của bạn!";
																	else
																	{
																		$sotrang=ceil($tong/so_sp_1_trang);
																		for($i=1;$i<=$sotrang;$i++)
																		{																	
																			if($i!=$trang)
																				echo '<li><a href="index.php?search='.$search.'&trang='.$i.'">'.$i.'</a></li>';
																			else 
																				echo '<li class="active"><a href="#">'.$i.'</a></li>';																	
																		}
																	}
															?>
														</ul>										
													</div>
												</div>
											</div>
										</section>
									<?php									 
								}
							}
						else
						switch($p){
							case "sanpham" : include"sanpham.php"; break;
							case "chitietsanpham" : include"chitietsanpham.php";break;
							case "giohang" : include"giohang.php";break;
							case "thanhtoan" : include"thanhtoan.php";break;
							case "dnhapvadki" : include"dnhapvadki.php";break;
							case "lienhe": include"lienhe.php";break;
							
							
							default : include"trangchu.php"; break;						
						}
						?>						
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>THIẾT KẾ <strong>HIỆN ĐẠI</strong></h4>
										<p>Mẫu mã đa dạng, luôn cập nhật xu hướng thời trang mới nhất</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>MIỄN PHÍ <strong>SHIPPING </strong></h4>
										<p>Trao sản phấm đến khách hàng nhanh nhất</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>TƯ VẤN <strong>TẬN TÌNH 24/7</strong></h4>
										<p>Liên hệ với chúng tôi để luôn được tư vấn những phong cách thời trang độc đáo và mới lạ</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">THƯƠNG HIỆU</span></h4>
				<div class="row">					
					<div class="span2">
						<img alt="" src="themes/images/clients/14.png">
					</div>
					<div class="span2">
						<img alt="" src="themes/images/clients/35.png">
					</div>
					<div class="span2">
						<img alt="" src="themes/images/clients/1.png">
					</div>
					<div class="span2">
						<img alt="" src="themes/images/clients/2.png">
					</div>
					<div class="span2">
						<img alt="" src="themes/images/clients/3.png">
					</div>
					<div class="span2">
						<img alt="" src="themes/images/clients/4.png">
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
					
						<ul class="nav">
							<li><a href="./index.html">Trang chủ</a></li>  
							<li><a href="./contact.html">Liên hệ</a></li>
							<li><a href="./cart.html">Giỏ hàng</a></li>
							<li><a href="./register.html">Đăng nhập</a></li>							
						</ul>					
					</div>
					<div class="span4">
					
						<ul class="nav">
							<li><a href="#">Tài khoản</a></li>
							<li><a href="#">Lịch sử đặt hàng</a></li>
							<li><a href="#">Bản tin</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p></p>
						<br/>
					</div>						
				</div>	
				<section id="copyright">
					<span>Copyright 2017 by Đại học Tài Nguyên và Môi Trường TP.Hồ Chí Minh.</span>
				</section>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">						
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>