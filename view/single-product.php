<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
<link rel="stylesheet" href="./view/asset/custom/css/pdt-galery.css">
<link rel="stylesheet" href="./view/asset/css/easyzoom.css">
<link rel="stylesheet" href="./view/asset/css/swiper.min.css">
<link rel="stylesheet" href="./view/css/custom.css">

<!-- Start Hero Section -->
<!-- <div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Giỏ hàng</h1>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Hero Section -->
<?php
if (is_array($product)) {
    extract($product);
    $id_pdt = $id;
    $listDetail = load_pdt_detail_of_one($id_pdt);
}
?>


<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row flex-sm-nowrap">
            <div class="col-sm-6">
                <div class="product__carousel">
                    <div class="gallery-parent">
                        <!-- SwiperJs and EasyZoom plugins start -->
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($listDetail as $danhsachbienthe) {
                                    extract($danhsachbienthe);
                                ?>
                                    <div class="swiper-slide easyzoom easyzoom--overlay">
                                        <a href="./upload/<?= $image_pd ?>">
                                            <img src="./upload/<?= $image_pd ?>" alt="">
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($listDetail as $danhsachbienthe) {
                                    extract($danhsachbienthe);
                                ?>
                                    <div class="swiper-slide">
                                        <img src="./upload/<?= $image_pd ?>" alt="">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- SwiperJs and EasyZoom plugins end -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-5">
                    <h1><?= $name_product ?></h1>
                </div>
                <div>
                    <form action="index.php?act=cart" method="post">
                        <div class="mb-3">
                            <label for="price" class="form-label fs-5">Giá sản phẩm</label>
                            <?php
                            $priceList = loadprice_pdtdetail($id_pdt);
                            $count = sizeof($priceList);
                            if ($count == 1) {
                                $price  =  $priceList[0][0];
                            ?>
                                <span><?= $price ?>đ</span>
                                <input class="form-control" type="text" name="price" value="<?= $price ?>" hidden>
                            <?php
                            }
                            if ($count > 1) {
                                $priceRange = array_column($priceList, 'price');
                                $min = min($priceRange);
                                $max = max($priceRange);
                            ?>
                                <div>
                                    <span class="fs-4 text-danger fw-bold"><?= $min ?>đ - <?= $max ?>đ</span>
                                </div>
                                <input class="form-control" type="text" name="price" value="<?= $price ?>" hidden>
                            <?php
                            }
                            // var_dump(($priceList));
                            // var_dump((sizeof($priceList)));
                            // var_dump ($count);
                            ?>
                            <!-- $50.00 -->
                        </div>
                        <div class="mb-3">
                            <label for="name_pdtdetail" class="form-label fs-5">Phân loại:</label>
                            <div>
                                <?php
                                foreach ($listDetail as $danhsachbienthe) {
                                    extract($danhsachbienthe);
                                ?>
                                    <input type="radio" class="btn-check" name="name_pdtdetail" id="loai<?= $id ?>" autocomplete="off">
                                    <label class="btn" style="padding: 5px 10px;" for="loai<?= $id ?>"><?= $name_pdtdetail ?></label>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="flex soLuong gap-50 mb-5">
                            <label for="amount" class="infor-tea form-label fs-5">Số lượng: </label>
                            <br>
                            <div class="d-flex input-group">
                                <div class="amountBtn minus input-group-btn btn">-</div>
                                <div>
                                    <input type="text" value="1" class="showAmount h-100 text-center">
                                </div>
                                <div class="amountBtn plus btn">+</div>
                            </div>
                        </div>
                        <div class="d-flex pt-5">
                            <button type="submit" name="" class="btn btn-secondary">
                            Mua ngay
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Mô tả sản phẩm</h4>
            <p><?= $detail_product ?></p>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./view/asset/js/easyzoom.js"></script>
<script src="./view/asset/js/swiper.min.js"></script>
<script src="./view/asset/custom/js/pdt-gallery.js"></script>
<script src="./view/asset/js/custom.js"></script>