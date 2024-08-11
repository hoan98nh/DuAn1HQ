<link rel="stylesheet" href="./view/css/custom.css">
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Shop</h1>
					<p class="mb-4">Rất vui được đón tiếp quý khách đến với cửa hàng trang sức của chúng tôi. Tại đây, chúng tôi tự hào giới thiệu đến quý khách những sản phẩm trang sức cao cấp, độc đáo và được thiết kế tinh tế. Mời quý khách thoải mái tham quan và lựa chọn những món trang sức ưng ý.</p>
					<!-- <p><a href="" class="btn btn-secondary me-2">Mua ngay</a><a href="#" class="btn btn-white-outline">Xem thêm</a></p> -->
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="./theme/imgshop.png" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
<div class="untree_co-section product-section before-footer-section">
	<div class="container" id="shopBox">
		<div class="row">

			<!-- Start Column 1 -->
			<div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="">
					<img src="./theme/nhan3.png" class="img-fluid product-thumbnail pdt_img">
					<h3 class="product-title">Nhẫn cưới Kim cương Vàng Trắng 14K</h3>
					<strong class="product-price">$50.00</strong>

					<span class="icon-cross">
						<img src="./view/asset/images/cross.svg" class="img-fluid">
					</span>
				</a>
			</div>
			<!-- End Column 1 -->
			<?php
			foreach ($listsanpham as $sanpham) {
				extract($sanpham);
			?>
				<div class="col-12 col-md-4 col-lg-3 mb-5">
					<a class="product-item" href="index.php?act=produc_detail&id=<?=$id?>">
						<img src="./upload/<?= $img_pdt ?>" class="img-fluid product-thumbnail pdt_img">
						<h3 class="product-title"><?= $name_product ?></h3>
						<strong class="product-price">
							<?php
							$id_pdt = $id;
							$priceList = loadprice_pdtdetail($id_pdt);
							$count = sizeof($priceList);
							if ($count == 1) {
								$price  =  $priceList[0][0];
								?>
								<span><?=$price?>đ</span>
								<?php
							}
							if ($count > 1) {
								$priceRange = array_column($priceList, 'price');
								$min = min($priceRange);
								$max = max($priceRange);
								?>
								<span><?=$min?>đ - <?=$max?>đ</span>
								<?php
							}
							// var_dump(($priceList));
							// var_dump((sizeof($priceList)));
							// var_dump ($count);
							?>
							<!-- $50.00 -->
						</strong>

						<span class="icon-cross">
							<img src="./view/asset/images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>