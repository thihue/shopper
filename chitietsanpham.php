<?php	
$masp=$_GET['masp'];									
	$sql="select* FROM sanpham where masp='$masp'";
	$stmt=$pdo->prepare($sql);
	$stmt->execute();
	$row=$stmt->fetch(PDO::FETCH_ASSOC)?>
			<section class="header_text sub">			
				<h4><span>Chi tiết sản phẩm</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span12">
						<div class="row">
							<div class="span4">
								<img style="height:342px; width:342px;" src="pp/<?php echo $row['hinh'];?>"/>																				
							</div>
							<div class="span8">
								<address>
									<strong><?php echo $row['tensp'];?></strong><br>
									<strong>Thương hiệu:</strong> <span><?php echo $row['nhasx'];?></span><br>
									<strong>Mã sản phẩm:</strong> <span><?php echo $row['masp'];?></span><br>		
									<strong>Tình trạng:</strong> <span><?php if($row['soluongton']=="0")echo 'Hết hàng'; else echo'Còn hàng';?></span><br>								
								</address>									
								<h4><strong>Giá: <?php echo $row['dongia'];?>&#8363;</strong></h4>
							</div>
							<div class="span8">
					
								<form class="form-inline">									
									<label>Số lượng:</label>
									<input type="text" class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Thêm vào giỏ hàng</button>
								</form>
							</div>							
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Mô tả</a></li>
									<li class=""><a href="#profile">Xem thêm hình ảnh</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?php echo $row['mota'];?></div>
									<div class="tab-pane" id="profile">
										<?php
										$sql="select* FROM hinh where masp='$masp'";
												$stmt=$pdo->prepare($sql);
												$stmt->execute();
												while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
												<p><img src="pp/<?php echo $row['anh'];?>"/></p>
												<br/>
										<?php }?>
									</div>
								</div>							
							</div>						
							<div class="span12">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text">Sản phẩm <strong>liên quan</strong></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<?php $sql="select* FROM sanpham where maloaisp='$_GET[maloai]' ORDER BY RAND() LIMIT 4";
													$stmt=$pdo->prepare($sql);
													$stmt->execute();
													while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloaisp']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
															<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloaisp']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp']; ?></a><br/>
															<p class="price"><?php echo $row['dongia']; ?>&#8363</p>													
														</div>
													</li>
												<?php } ?>												
											</ul>
										</div>																			
										<div class="item">
											<ul class="thumbnails">												
												<?php $sql="select* FROM sanpham where maloaisp='$_GET[maloai]' ORDER BY masp desc LIMIT 4";
													$stmt=$pdo->prepare($sql);
													$stmt->execute();
													while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloaisp']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
															<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloaisp']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp']; ?></a><br/>
															<p class="price"><?php echo $row['dongia']; ?>&#8363</p>													
														</div>
													</li>
												<?php } ?>																																	
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</section>	
		
				
		<!-- scripts -->		
		