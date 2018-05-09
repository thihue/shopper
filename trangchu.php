	<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Sản Phẩm <strong>Mới Nhất</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<?php											
												$sql="select* FROM sanpham where maloai='ml01' ORDER BY masp DESC LIMIT 0,8";
												$stmt=$pdo->prepare($sql);
												$stmt->execute();
												while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
														<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp'];?></a><br/>
														<a href="index.php?p=sanpham&maloai=<?php echo $row['maloai'];?>" class="category">Áo Kiểu</a>
														<p class="price"><?php echo $row['dongia'];?>&#8363;</p>
													</div>
												</li>
												<?php } ?>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
											<?php												
												$sql="select* FROM sanpham where maloai='ml02' ORDER BY masp DESC LIMIT 0,8";
												$stmt=$pdo->prepare($sql);
												$stmt->execute();
												while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>$masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
														<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp'];?></a><br/>
														<a href="index.php?p=sanpham&maloai=<?php echo $row['maloai'];?>" class="category">Đầm Váy</a>
														<p class="price"><?php echo $row['dongia'];?>&#8363;</p>
													</div>
												</li>
											<?php } ?>	
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
											<?php
												$sql="select* FROM sanpham where maloai='ml03' ORDER BY masp DESC LIMIT 0,8";
												$stmt=$pdo->prepare($sql);
												$stmt->execute();
												while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
														<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp'];?></a><br/>
														<a href="index.php?p=sanpham&maloai=<?php echo $row['maloai']?>" class="category">Công Sở</a>
														<p class="price"><?php echo $row['dongia'];?>&#8363</p>
													</div>
												</li>
											<?php } ?>	
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
											<?php
												$sql="select* FROM sanpham where maloaisp='ml11' ORDER BY masp DESC LIMIT 0,8";
												$stmt=$pdo->prepare($sql);
												$stmt->execute();
												while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
														<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp'];?></a><br/>
														<a href="index.php?p=sanpham&maloai=<?php echo $row['maloai']?>" class="category">Áo Thun Nam </a>
														<p class="price"><?php echo $row['dongia'];?>&#8363</p>
													</div>
												</li>
											<?php } ?>	
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
											<?php
												$sql="select* FROM sanpham where maloai='ml12' ORDER BY masp DESC LIMIT 0,8";
												$stmt=$pdo->prepare($sql);
												$stmt->execute();
												while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
														<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp'];?></a><br/>
														<a href="index.php?p=sanpham&maloai=<?php echo $row['maloai']?>" class="category">Sơ Mi Nam</a>
														<p class="price"><?php echo $row['dongia'];?>&#8363</p>
													</div>
												</li>
											<?php } ?>	
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
											<?php
												$sql="select* FROM sanpham where maloai='ml13' ORDER BY masp DESC LIMIT 0,8";
												$stmt=$pdo->prepare($sql);
												$stmt->execute();
												while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
												<li class="span3">
													<div class="product-box">
														<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
														<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp'];?></a><br/>
														<a href="index.php?p=sanpham&maloai=<?php echo $row['maloai']?>" class="category">Áo Khoác Nam</a>
														<p class="price"><?php echo $row['dongia'];?>&#8363</p>
													</div>
												</li>
											<?php } ?>	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
	</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Sản Phẩm <strong>Bán Chạy</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
											<ul class="thumbnails">	
											<?php
											$sql="select sanpham.maloai, sanpham.tensp, sanpham.hinh, sanpham.dongia, chitiethoadon.masp, SUM(soluong)'Số lượng' 
											FROM sanpham 
											JOIN chitiethoadon ON sanpham.masp= chitiethoadon.masp 
											GROUP BY masp, tensp 
											ORDER BY SUM(soluong) DESC LIMIT 0,4";
											$stmt=$pdo->prepare($sql);
											$stmt->execute();
											while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
											?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
														<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp']; ?></a><br/>
														<p class="price"><?php echo $row['dongia']; ?>&#8363</p>
													</div>
												</li>
											<?php } ?>	
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">	
											<?php
											$sql="select sanpham.maloai, sanpham.tensp, sanpham.hinh, sanpham.dongia, chitiethoadon.masp, SUM(soluong)'Số lượng' 
											FROM sanpham 
											JOIN chitiethoadon ON sanpham.masp= chitiethoadon.masp 
											GROUP BY masp, tensp 
											ORDER BY SUM(soluong) DESC LIMIT 4,4";
											$stmt=$pdo->prepare($sql);
											$stmt->execute();
											while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
											?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" src="pp/<?php echo $row['hinh'];?>" alt="" /></a></p>
														<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp']; ?></a><br/>
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