    <!-- Start Hero Section -->
    <div class="hero">
    	<div class="container">
    		<div class="row justify-content-between">
    			<div class="col-lg-5">
    				<div class="intro-excerpt">
    					<h1>Trang Sức HQ <span clsas="d-block"> </span></h1>
    					<p class="mb-4">Rất vui được đón tiếp quý khách đến với cửa hàng trang sức của chúng tôi. Tại đây, chúng tôi tự hào giới thiệu đến quý khách những sản phẩm trang sức cao cấp, độc đáo và được thiết kế tinh tế. Mời quý khách thoải mái tham quan và lựa chọn những món trang sức ưng ý.</p>
    					<p>
    						<!-- <a href="" class="btn btn-secondary me-2">Mua ngay</a> -->
    						<a href="#" class="btn btn-white-outline">Xem thêm</a>
    					</p>
    				</div>
    			</div>
    			<div class="col-lg-7">
    				<div class="hero-img-wrap">
    					<img src="./theme/BIa123.png" class="img-fluid">
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
    	<div class="container">
    		<div class="row">

    			<!-- Start Column 1 -->
    			<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
    				<h2 class="mb-4 section-title">Được chế tạo bằng vật liệu tuyệt vời.</h2>
    				<p class="mb-4">Với tất cả tâm huyết và khát vọng về một kỷ nguyên cách tân trang sức Việt, thương hiệu HQ không chỉ là chuỗi cửa hàng kinh doanh mà còn là nơi kiến tạo ra hàng ngàn kiểu mẫu trang sức. </p>
    				<p><a href="./view/shop.php" class="btn">Xem thêm</a></p>
    			</div>
    			<!-- End Column 1 -->

    			<?php
				$listsanphamHome  = loadadd_product_home();
				foreach ($listsanphamHome as $sanpham) {
					extract($sanpham);
				?>
    				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
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
    								<span><?= $price ?>đ</span>
    							<?php
								}
								if ($count > 1) {
									$priceRange = array_column($priceList, 'price');
									$min = min($priceRange);
									$max = max($priceRange);
								?>
    								<span><?= $min ?>đ - <?= $max ?>đ</span>
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
    			<!-- Start Column 2 -->
    			<!-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
    				<a class="product-item" href="cart.html">
    					<img src="./theme/nhan1.png" class="img-fluid product-thumbnail">
    					<h3 class="product-title">Nhẫn Kim cương Vàng trắng 14K</h3>
    					<strong class="product-price">$50.00</strong>

    					<span class="icon-cross">
    						<img src="./view/asset/images/cross.svg" class="img-fluid">
    					</span>
    				</a>
    			</div> -->
    			<!-- End Column 2 -->

    		</div>
    	</div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
    	<div class="container">
    		<div class="row justify-content-between">
    			<div class="col-lg-6">
    				<h2 class="section-title">Tại sao chọn chúng tôi ?</h2>
    				<p>Với nhiều năm kinh nghiệm trong lĩnh vực bán lẻ, chúng tôi tự hào là một trong những nhà cung cấp hàng đầu, mang đến
    					cho khách hàng trải nghiệm mua sắm tuyệt vời. Dưới đây là những lý do tại sao bạn nên chọn chúng tôi.</p>

    				<div class="row my-5">
    					<div class="col-6 col-md-6">
    						<div class="feature">
    							<div class="icon">
    								<img src="./view/asset/images/truck.svg" alt="Image" class="imf-fluid">
    							</div>
    							<h3>Vận chuyển nhanh &amp; Miễn phí </h3>
    							<p>Với dịch vụ vận chuyển nhanh và miễn phí của chúng tôi, bạn sẽ nhận được sản phẩm trong vòng 24 giờ sau khi đặt hàng, không phải trả thêm bất kỳ khoản phí vận chuyển nào.</p>
    						</div>
    					</div>

    					<div class="col-6 col-md-6">
    						<div class="feature">
    							<div class="icon">
    								<img src="./view/asset/images/bag.svg" alt="Image" class="imf-fluid">
    							</div>
    							<h3>Dễ dàng mua sắm</h3>
    							<p>Quá trình mua sắm cũng trở nên dễ dàng hơn bao giờ hết, mang lại trải nghiệm tuyệt vời cho khách hàng.</p>
    						</div>
    					</div>

    					<div class="col-6 col-md-6">
    						<div class="feature">
    							<div class="icon">
    								<img src="./view/asset/images/support.svg" alt="Image" class="imf-fluid">
    							</div>
    							<h3>Hỗ trợ tư vấn 24/7 </h3>
    							<p>Đội ngũ chăm sóc khách hàng chuyên nghiệp. Nếu có bất kỳ thắc mắc nào, chúng tôi luôn sẵn sàng hỗ trợ và tư vấn 24/7.</p>
    						</div>
    					</div>

    					<div class="col-6 col-md-6">
    						<div class="feature">
    							<div class="icon">
    								<img src="./view/asset/images/return.svg" alt="Image" class="imf-fluid">
    							</div>
    							<h3>Trả lại miễn phí trong 7 ngày</h3>
    							<p>Và nếu bạn không hài lòng với sản phẩm, chúng tôi sẽ hỗ trợ đổi trả miễn phí trong vòng 7 ngày.</p>
    						</div>
    					</div>

    				</div>
    			</div>

    			<div class="col-lg-5">
    				<div class="img-wrap">
    					<img src="./theme/bia2.jpg" alt="Image" class="img-fluid">
    				</div>
    			</div>

    		</div>
    	</div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
    	<div class="container">
    		<div class="row justify-content-between">
    			<div class="col-lg-7 mb-5 mb-lg-0">
    				<div class="imgs-grid">
    					<div class="grid grid-1"><img src="./theme/gir1.jpg" alt="Untree.co"></div>
    					<div class="grid grid-2"><img src="./theme/gir2.jpg" alt="Untree.co"></div>
    					<div class="grid grid-3"><img src="./theme/gir3.jpg" alt="Untree.co"></div>
    				</div>
    			</div>
    			<div class="col-lg-5 ps-lg-5">
    				<h2 class="section-title mb-4">Chúng tôi giúp bạn thiết kế trang sức hiện đại✨</h2>
    				<p>Phong cách và tinh tế, mang đến sự sang trọng và tự tin cho phụ nữ hiện đại. Với các thiết kế độc đáo, kết hợp giữa các chất liệu cao cấp và công nghệ hiện đại, chúng tôi tạo ra những món trang sức vừa thời trang, vừa tinh tế, vừa phù hợp với nhu cầu của phụ nữ thời đại mới</p>

    				<ul class="list-unstyled custom-list my-4">
    					<li>Các sản phẩm của chúng tôi được thiết kế bởi những người thợ lành nghề, đảm bảo chất lượng và độ bền cao</li>
    					<li>Chúng tôi luôn cập nhật xu hướng thời trang trang sức để đáp ứng nhu cầu của khách hàng</li>
    					<li>Chúng tôi cam kết mang đến trải nghiệm mua sắm trang sức hoàn hảo cho khách hàng</li>
    					<li>Khách hàng sẽ được tư vấn tận tình và hỗ trợ trong suốt quá trình mua sắm</li>
    				</ul>
    				<p><a href="index.php?act=shop" class="btn">Xem thêm</a></p>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
    	<div class="container">
    		<div class="row">

    			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
    				<div class="product-item-sm d-flex">
    					<div class="thumbnail">
    						<img src="./theme/nhan5.png" alt="Image" class="img-fluid">
    					</div>
    					<div class="pt-3">
    						<h3>Nhẫn Kim Cương</h3>
    						<p>Các mẫu nhẫn kim cương </p>
    						<p><a href="#">Read More</a></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
    				<div class="product-item-sm d-flex">
    					<div class="thumbnail">
    						<img src="./theme/vong1.png" alt="Image" class="img-fluid">
    					</div>
    					<div class="pt-3">
    						<h3>Bông Tai Kim Cương</h3>
    						<p>Các mẫu bông tai kim cương</p>
    						<p><a href="#">Read More</a></p>
    					</div>
    				</div>
    			</div>


    			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
    				<div class="product-item-sm d-flex">
    					<div class="thumbnail">
    						<img src="./theme/hoatai1.png" alt="Image" class="img-fluid">
    					</div>
    					<div class="pt-3">
    						<h3>Bông Tai Kim Cương</h3>
    						<p>Các mẫu bông tai kim cương</p>
    						<p><a href="#">Read More</a></p>
    					</div>
    				</div>
    			</div>

    		</div>
    	</div>
    </div>
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-7 mx-auto text-center">
    				<h2 class="section-title">Đánh Giá</h2>
    			</div>
    		</div>

    		<div class="row justify-content-center">
    			<div class="col-lg-12">
    				<div class="testimonial-slider-wrap text-center">

    					<div id="testimonial-nav">
    						<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
    						<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
    					</div>

    					<div class="testimonial-slider">

    						<div class="item">
    							<div class="row justify-content-center">
    								<div class="col-lg-8 mx-auto">

    									<div class="testimonial-block text-center">
    										<blockquote class="mb-5">
    											<p>&ldquo;Khi lựa chọn và mua sắm nhẫn, người tiêu dùng thể hiện nhiều kiểu hành vi khác nhau. Có những người mua theo lý trí, chú trọng vào yếu tố giá cả, chất lượng và độ bền. Ngược lại, cũng có người mua theo cảm xúc, ưu tiên thiết kế và phong cách của sản phẩm để thể hiện cá tính. Bên cạnh đó, nhóm người mua thực dụng tìm kiếm sự tiện dụng và khả năng phối đồ của nhẫn. Cuối cùng, nhóm người mua sưu tập hướng đến các mẫu nhẫn độc đáo, hiếm có, chú trọng vào giá trị lịch sử và văn hóa. Hiểu rõ các kiểu người mua sẽ giúp các nhà bán hàng và thiết kế có những chiến lược tiếp cận phù hợp.</p>
    										</blockquote>

    										<div class="author-info">
    											<div class="author-pic">
    												<img src="./theme/furni-1.0.0/images/person_1.jpg" alt="Maria Jones" class="img-fluid">
    											</div>
    											<h3 class="font-weight-bold">Maria Jones</h3>
    											<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
    										</div>
    									</div>

    								</div>
    							</div>
    						</div>
    						<!-- END item -->

    						<div class="item">
    							<div class="row justify-content-center">
    								<div class="col-lg-8 mx-auto">

    									<div class="testimonial-block text-center">
    										<blockquote class="mb-5">
    											<p>&ldquo;Vòng cổ là một phụ kiện thời trang đơn giản nhưng có sức ảnh hưởng lớn đến tổng thể phong cách của người mặc. Người ưa phong cách cổ điển thường chọn các mẫu vòng cổ ngọc trai, dây chuyền đơn giản, tạo cảm giác sang trọng, nữ tính. Ngược lại, những ai theo đuổi phong cách cá tính, hiện đại lại ưa chuộng các kiểu vòng cổ kim loại, da lộn, với các chi tiết nổi bật như đinh tán hoặc họa tiết độc đáo. Việc lựa chọn vòng cổ phù hợp không chỉ làm nổi bật vẻ ngoài mà còn góp phần thể hiện cá tính, sở thích thời trang của người mặc.</p>
    										</blockquote>

    										<div class="author-info">
    											<div class="author-pic">
    												<img src="./theme/furni-1.0.0/images/person_2.jpg" alt="Maria Jones" class="img-fluid">
    											</div>
    											<h3 class="font-weight-bold">Maria Jones</h3>
    											<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
    										</div>
    									</div>

    								</div>
    							</div>
    						</div>
    						<!-- END item -->

    						<div class="item">
    							<div class="row justify-content-center">
    								<div class="col-lg-8 mx-auto">

    									<div class="testimonial-block text-center">
    										<blockquote class="mb-5">
    											<p>&ldquo;Hoa tai là một phụ kiện thời trang không thể thiếu, góp phần hoàn thiện và làm nổi bật vẻ đẹp của người mặc. Các kiểu hoa tai có thiết kế đa dạng, từ đơn giản như khuyên tròn đến cầu kỳ với họa tiết và đá quý. Những người ưa chuộng phong cách cổ điển thường lựa chọn các mẫu hoa tai ngọc trai hoặc kim loại quý, tạo cảm giác sang trọng, nữ tính. Ngược lại, những ai theo đuổi phong cách cá tính, hiện đại lại ưa chuộng các kiểu hoa tai có họa tiết, màu sắc nổi bật, như hoa tai trang trí đính đá hoặc các mẫu hoa tai dài, lớn. Bên cạnh đó, các mẫu hoa tai nhỏ gọn cũng đang được ưa chuộng bởi những người theo đuổi phong cách nữ tính.</p>
    										</blockquote>

    										<div class="author-info">
    											<div class="author-pic">
    												<img src="./theme/furni-1.0.0/images/person_3.jpg" alt="Maria Jones" class="img-fluid">
    											</div>
    											<h3 class="font-weight-bold">Maria Jones</h3>
    											<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
    										</div>
    									</div>

    								</div>
    							</div>
    						</div>
    						<!-- END item -->

    					</div>

    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    <div class="blog-section">
    	<div class="container">
    		<div class="row mb-5">
    			<div class="col-md-6">
    				<h2 class="section-title">Blog gần đây</h2>
    			</div>
    			<div class="col-md-6 text-start text-md-end">
    				<a href="#" class="more">Xem tất cả bài viết</a>
    			</div>
    		</div>

    		<div class="row">

    			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
    				<div class="post-entry">
    					<a href="#" class="post-thumbnail"><img src="./theme/blog1.png" alt="Image" class="img-fluid"></a>
    					<div class="post-content-entry">
    						<h3><a href="#">Ý tưởng thiết kế nhẫn của</a></h3>
    						<div class="meta">
    							<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
    				<div class="post-entry">
    					<a href="#" class="post-thumbnail"><img src="./theme/blog3.png" alt="Image" class="img-fluid"></a>
    					<div class="post-content-entry">
    						<h3><a href="#">Ý tưởng thiết kế nhẫn mùa xuân của</a></h3>
    						<div class="meta">
    							<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
    				<div class="post-entry">
    					<a href="#" class="post-thumbnail"><img src="./theme/blog6.png" alt="Image" class="img-fluid"></a>
    					<div class="post-content-entry">
    						<h3><a href="#">Ý tưởng thiết kế nhẫn mùa hạ của</a></h3>
    						<div class="meta">
    							<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
    						</div>
    					</div>
    				</div>
    			</div>

    		</div>
    	</div>
    </div>
    <!-- End Blog Section -->