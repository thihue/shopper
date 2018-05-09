<?php 
if(isset($_GET['maloai']))
	{	
		$maloai=$_GET['maloai'];
		$sql="SELECT * from loaisanpham WHERE maloai='$maloai'";
	}
else{ 
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$sql="SELECT * from mucsanpham WHERE id_muc='$id'";
		}
	}
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);			
?>
<section class="header_text sub">							
	<h4><span><?php if(isset($id))
							echo $row['tenmuc'];
					else 
						if(isset($maloai))
						echo'sản phẩm '.$row['tenloai'];?>
	</span></h4>							
</section>
			
<?php
if(isset($_GET['maloai']))		
	$sql="select * from sanpham where maloai='$maloai'";
else
{
	if(isset($_GET['id'])){
		
		$sql="select * from loaisanpham, sanpham where loaisanpham.maloai=sanpham.maloai and loaisanpham.id_muc='$id'";}
}
$trang=1;
if(isset($_GET['trang']))
$trang=$_GET['trang'];
$vitri=($trang-1)*so_sp_1_trang;
$sql.=" limit ".$vitri.",".so_sp_1_trang;					

$stmt=$pdo->prepare($sql);
$stmt->execute();			
?>
<section class="main-content">				
	<div class="row">						
		<div class="span12">					
			<ul class="thumbnails listing-products">
				<?php while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>	
					<li class="span3">
						<div class="product-box">												
							<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>"><img style="height:270px; width:270px;" alt="" src="pp/<?php echo $row['hinh'] ?>"></a><br/>
							<a href="index.php?p=chitietsanpham&maloai=<?php echo $row['maloai']?>&masp=<?php echo $row['masp'];?>" class="title"><?php echo $row['tensp'] ?></a><br/>								
							<p class="price"><?php echo $row['dongia']?>&#8363</p>
						</div>
					</li>
				<?php }?>	
			</ul>						
			<hr>						
			<div class="pagination pagination-small pagination-centered">		
				<ul>
				
					<?php
					if(isset($_GET['maloai']))		
						$sql="select count(*) from sanpham where maloai='$maloai'";
					else
						{
							if(isset($_GET['id'])){
								
								$sql="select count(*) from loaisanpham, sanpham where loaisanpham.maloai=sanpham.maloai and loaisanpham.id_muc='$id'";}
						}
					$stmt=$pdo->query($sql);
					$tong=$stmt->fetchColumn(0);
					$sotrang=ceil($tong/so_sp_1_trang);
					for($i=1;$i<=$sotrang;$i++)
					{
						if(isset($_GET['maloai']))
						{
								if($i!=$trang)
									echo '<li><a href="index.php?p=sanpham&maloai='.$maloai.'&trang='.$i.'">'.$i.'</a></li>';
								else 
									echo '<li class="active"><a href="#">'.$i.'</a></li>';
						}
						else
						{
							if(isset($_GET['id']))
							{
								if($i!=$trang)
								{
									echo '<li><a href="index.php?p=sanpham&id='.$id.'&trang='.$i.'">'.$i.'</a></li>';
								}
								else 
									echo '<li class="active"><a href="#">'.$i.'</a></li>';
							}
						}
					}
					?>
				</ul>
			</div>
		</div>					
	</div>
</section>
							
						