
<div class="row mb ">
<div class="boxtrai mr ">
<div class="row">
<div class="banner mb">

<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <img src="view/images/banner1.jpg" style="width:80%">
    </div>

    <div class="mySlides fade">
        <img src="view/images/banner2.jpg" style="width:90%">
    </div>

    <div class="mySlides fade">
        <img src="view/images/banner3.jpg" style="width:80%">
    </div>

<!-- Next and previous buttons -->

</div>
<br>

<!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    </div>
        </div>
            <div class="row">
                <?php
                    $i=0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)) {
                            $mr="";
                        } else {
                            $mr="mr";
                        }

                        echo '<div class="boxsp '.$mr.'">
                                <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                    
                                <p>$'.$price.'</p>
                                <a href="'.$linksp.'">'.$name.'</a>
                                <div class="row btnaddtocart">
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <input type="hidden" name="name" value="'.$name.'">
                                    <input type="hidden" name="img" value="'.$img.'">
                                    <input type="hidden" name="price" value="'.$price.'">
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>

                            </div>
                            </div>';
                        $i+=1;
                    }
                ?>
            </div>
        </div>

        <div class="boxphai ">
        <?php
            include "boxright.php";
        ?>
</div>
           