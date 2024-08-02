<link rel="stylesheet" href="./view/asset/custom/css/pdt-galery.css">
<link rel="stylesheet" href="./view/asset/css/easyzoom.css">
<link rel="stylesheet" href="./view/asset/css/swiper.min.css">

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



<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <div class="product__carousel">
                <!-- Swiper and EasyZoom plugins start -->
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-1.jpg?raw=true">
                                <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-1.jpg?raw=true" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-2.jpg?raw=true">
                                <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-2.jpg?raw=true" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-3.jpg?raw=true">
                                <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-3.jpg?raw=true" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-4.jpg?raw=true">
                                <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-4.jpg?raw=true" alt="" />
                            </a>
                        </div>
                        <div class="swiper-slide easyzoom easyzoom--overlay">
                            <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-5.jpeg?raw=true">
                                <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-5.jpeg?raw=true" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-1.jpg?raw=true" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-2.jpg?raw=true" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-3.jpg?raw=true" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-4.jpg?raw=true" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-5.jpeg?raw=true" alt="">
                        </div>
                    </div>
                </div>
                <!-- Swiper and EasyZoom plugins end -->
            </div>
        </div>
    </div>
</div>

<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 5,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
        }
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        },
    });
    // change carousel item height
    // gallery-top
    let productCarouselTopWidth = $('.gallery-top').outerWidth();
    $('.gallery-top').css('height', productCarouselTopWidth);

    // gallery-thumbs
    let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
    $('.gallery-thumbs').css('height', productCarouselThumbsItemWith);

    // activation zoom plugin
    var $easyzoom = $('.easyzoom').easyZoom();
</script>