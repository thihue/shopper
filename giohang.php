	
    <div class="container">
    <div class="row">
        <div class="span12" >
            <table class="table table-hover">
                <thead>
					<tr>						
						<th>Tên Sản phẩm</th>
                        <th>Số Lượng</th>
                        <th class="text-center">Giá</th>
                        <th></th>						
					</tr>
				</thead>
                <tbody>					
				
				<?php 
					if(isset($_SESSION['giohang']))
					{
						if(isset($_GET['xoa']))
				{
				   $ms=$_GET['masp'];
					if(isset($_SESSION['giohang'][$ms]))
					{						
						unset($_SESSION['giohang'][$ms]);
					}	
					echo " Đã xóa sản phẩm ra giỏ hàng"	;			
				}	
				

						$tongcong=0;
						foreach($_SESSION['giohang'] as $gh=>$sl)
						{
							$sql = "select * from sanpham where masp='$gh'";
							$stmt = $pdo->prepare($sql);
							$stmt->execute();
							$t= $stmt->fetchAll();
							?>
							<tr>
								<form method="get">
									<td class="col-md-6">						
										<div class="media">
											<a class="thumbnail pull-left" href="#">
												<img class="media-object" src="<?php echo "pp/".$t[0]['hinh'] ?>" style="width: 72px; height: 72px;"></a>
												<div class="media-body">
													<h4 class="media-heading"><a href="#"><?php echo $t[0]['tensp']; ?></a></h4>
												</div>
										</div>
									</td>
			                        <td class="col-md-1" style="text-align: center">
			                        	<input type="text" class="form-control" name ='soluong' value="<?php echo $sl;?>"/>
			                        </td>
											<input type="hidden" class="form-control" name ='masp' value="<?php echo $gh; ?>">
			                        <td class="col-md-1 text-center"><strong><?php echo number_format($sl*($t[0]['dongia'])); ?></strong></td>
			                        <td class="col-md-1">						
			                        	<button type="submit" name="xoa" class="btn btn-danger">
			                        		<span class="glyphicon glyphicon-remove"></span>Xóa
			                        	</button>
									</td>					
								</form>
							</tr>
	                    		<?php
										$tongcong += $sl*($t[0]['dongia']);
						}
						?>					
						</tbody>
	                </table>
							<p class="cart-total right">
								<strong>Tổng cộng:<?php echo number_format($tongcong)."VND"?></strong>
								<?php 
					}
						?><br>
						</p>
						<p class="buttons center">							
							 <a href="index.php"><button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Tiếp tục
                        </button></a>
							<a href="gh.php?check"><button type="button" name="check" class="btn btn-success">
                           Kiểm tra <span class="glyphicon glyphicon-play"></span>
                        </button></a>						
						</p>								
					</div>			
				</div>
		</div>
									