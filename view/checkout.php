<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Thanh toán</h1>
				</div>
			</div>
			<div class="col-lg-7">
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section">
	<div class="container">
		<?php
		if (!isset($_SESSION["username"])) {
		?>
			<div class="row mb-5">
				<div class="col-md-12">
					<div class="border p-4 rounded" role="alert">
						<a href="index.php?act=loginpage">Nhấn vào đây</a> để đăng nhập
					</div>
				</div>
			</div>
		<?php
		}
		?>
		<div class="row">
			<div class="col-md-6 mb-5 mb-md-0">
				<h2 class="h3 mb-3 text-black">Chi tiết thanh toán</h2>
				<div class="p-3 p-lg-5 border bg-white">
					<!-- <div class="form-group">
		              <label for="c_country" class="text-black">Quốc gia <span class="text-danger">*</span></label>
		              <select id="c_country" class="form-control">
		                <option value="1">Chọn một quốc gia</option>    
		                <option value="2">Vietnamese</option>    
		                <option value="3">Canada</option>    
		                <option value="4">Afghanistan</option>    
		                <option value="5">Ghana</option>    
		                <option value="6">Albania</option>    
		                <option value="7">Bahrain</option>    
		                <option value="8">Colombia</option>    
		                <option value="9">Dominican Republic</option>    
		              </select>
		            </div> -->
					<div class="form-group row">
						<div class="col-md-12">
							<label for="c_fname" class="text-black">Tên người nhận <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_fname" name="c_fname" value="<?=$nameRecive?>" require>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-12">
							<label for="c_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_address" name="c_address" placeholder="Địa chỉ đường phố" value="<?=$addressRecive?>">
						</div>
					</div>

					<div class="form-group row mb-5">
						<div class="col-md-6">
							<label for="c_email_address" class="text-black">Địa chỉ email <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_email_address" name="c_email_address" value="<?=$emailRecive?>" require>
						</div>
						<div class="col-md-6">
							<label for="c_phone" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Số điện thoại" value="<?=$telRecive?>" require>
						</div>
					</div>

					<!-- <div class="form-group">
		              <label for="c_create_account" class="text-black" data-bs-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Tạo một tài khoản?</label>
		              <div class="collapse" id="create_an_account">
		                <div class="py-2 mb-4">
		                  <p class="mb-3">Tạo một tài khoản bằng cách nhập thông tin dưới đây. Nếu bạn là khách hàng cũ, vui lòng đăng nhập ở đầu trang.</p>
		                  <div class="form-group">
		                    <label for="c_account_password" class="text-black">Mật khẩu tài khoản</label>
		                    <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
		                  </div>
		                </div>
		              </div>
		            </div> -->


					<!-- <div class="form-group">
		              <label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Gửi đến một địa chỉ khác?</label>
		              <div class="collapse" id="ship_different_address">
		                <div class="py-2">

		                  <div class="form-group">
		                    <label for="c_diff_country" class="text-black">Quốc gia <span class="text-danger">*</span></label>
                                <select id="c_country" class="form-control">
                                <option value="1">Chọn một quốc gia</option>    
                                <option value="2">Vietnamese</option>    
                                <option value="3">Canada</option>    
                                <option value="4">Afghanistan</option>    
                                <option value="5">Ghana</option>    
                                <option value="6">Albania</option>    
                                <option value="7">Bahrain</option>    
                                <option value="8">Colombia</option>    
                                <option value="9">Dominican Republic</option>    
                            </select>
		                  </div>


		                  <div class="form-group row">
		                    <div class="col-md-6">
		                      <label for="c_diff_fname" class="text-black">Tên <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
		                    </div>
		                    <div class="col-md-6">
		                      <label for="c_diff_lname" class="text-black">Họ <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
		                    </div>
		                  </div>

		                  <div class="form-group row">
		                    <div class="col-md-12">
		                      <label for="c_diff_companyname" class="text-black">Tên công ty </label>
		                      <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
		                    </div>
		                  </div>

		                  <div class="form-group row  mb-3">
		                    <div class="col-md-12">
		                      <label for="c_diff_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Địa chỉ đường phố">
		                    </div>
		                  </div>

		                  <div class="form-group">
		                    <input type="text" class="form-control" placeholder="Số nhà, đường, thành phố, v.v. (tùy chọn)">
		                  </div>

		                  <div class="form-group row">
		                    <div class="col-md-6">
		                      <label for="c_diff_state_country" class="text-black">Tiểu bang / Quốc gia <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
		                    </div>
		                    <div class="col-md-6">
		                      <label for="c_diff_postal_zip" class="text-black">Thư / Mã Zip <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
		                    </div>
		                  </div>

		                  <div class="form-group row mb-5">
		                    <div class="col-md-6">
		                      <label for="c_diff_email_address" class="text-black">Địa chỉ email  <span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
		                    </div>
		                    <div class="col-md-6">
		                      <label for="c_diff_phone" class="text-black">Số điện thoại<span class="text-danger">*</span></label>
		                      <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
		                    </div>
		                  </div>

		                </div>

		              </div>
		            </div> -->

					<div class="form-group">
						<label for="c_order_notes" class="text-black">Ghi chú đặt hàng</label>
						<textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Viết ghi chú của bạn ở đây..."></textarea>
					</div>

				</div>
			</div>
			<div class="col-md-6">

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Mã giảm giá</h2>
						<div class="p-3 p-lg-5 border bg-white">

							<label for="c_code" class="text-black mb-3">Nhập mã phiếu giảm giá của bạn nếu bạn có</label>
							<div class="input-group w-75 couponcode-wrap">
								<input type="text" class="form-control me-2" id="c_code" placeholder="Mã giảm giá" aria-label="Coupon Code" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-black btn-sm" type="button" id="button-addon2">Áp dụng</button>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-md-12">
						<h2 class="h3 mb-3 text-black">Đơn hàng của bạn</h2>
						<div class="p-3 p-lg-5 border bg-white">
							<table class="table site-block-order-table mb-5">
								<thead>
									<th>Sản phẩm</th>
									<th>Tổng cộng</th>
								</thead>
								<tbody>
									<tr>
										<td>Sản phẩm demo 1 <strong class="mx-2">x</strong> 1</td>
										<td>250</td>
									</tr>
									<tr>
										<td>Polo Shirt <strong class="mx-2">x</strong> 1</td>
										<td>100</td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Tổng phụ của giỏ hàng</strong></td>
										<td class="text-black">$350.00</td>
									</tr>
									<tr>
										<td class="text-black font-weight-bold"><strong>Tổng số đơn hàng</strong></td>
										<td class="text-black font-weight-bold"><strong>$350.00</strong></td>
									</tr>
								</tbody>
							</table>

							<div class="border p-3 mb-3">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Chuyển khoản trực tiếp</a></h3>

								<div class="collapse" id="collapsebank">
									<div class="py-2">
										<p class="mb-0">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</p>
									</div>
								</div>
							</div>

							<div class="border p-3 mb-3">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Thanh toán bằng thẻ</a></h3>

								<div class="collapse" id="collapsecheque">
									<div class="py-2">
										<p class="mb-0">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</p>
									</div>
								</div>
							</div>

							<div class="border p-3 mb-5">
								<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Thanh toán bằng ứng dụng Paypal</a></h3>

								<div class="collapse" id="collapsepaypal">
									<div class="py-2">
										<p class="mb-0">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</p>
									</div>
								</div>
							</div>

							<div class="form-group">
								<button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='index.php?act=thankyou'">Đặt Hàng</button>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- </form> -->
	</div>
</div>