<?php

if ((!isset($_SESSION["username"]))) {
?>
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="d-flex justify-content-center">

                <div class="col-md-4">
                    <div class="text-center mb-4">
                        <h2>Đăng nhập</h2>
                    </div>
                    <form action="index.php?act=login" method="post">
                        <div class="form-group mb-1">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Tên đăng nhập">
                        </div>
                        <div class="form-group mb-1">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group mb-3">
                            <a href="#">Chưa có tài khoản? Đăng kí ngay</a>
                        </div>
                        <input type="submit" class="btn btn-primary" name="dangnhap" value="Đăng nhập">
                    </form>

                    <?php
                    if (isset($_SESSION["error"]) && ($_SESSION["error"])) {
                    ?>
                        <div class="text-danger mt-3 text-center" disable>
                            <?= $_SESSION["error"] ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
<?php
} else {
    header("Location: ./index.php");
}
?>