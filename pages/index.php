<?php
require_once('../project_webBanHang/admin/config/db.php');
$sql = "SELECT * FROM trangchu";
$query = mysqli_query($connect, $sql);
?>
<?php
while ($row = mysqli_fetch_array($query)) {
?>
    <!-- content -->
    <div class="content">
        <!-- content 1 -->
        <div class="content_gender">
            <div class="content_gender1">
                <a href="">
                    <img class="img_content" src="admin/img/<?php echo $row['img1'] ?>" alt="" style="width: 100%;border-radius: 10%;" /></a>
                <div class="header-content_gender">
                    <h3>Thời trang nam</h3>
                </div>
            </div>
            <div class="content_gender2">
                <a href="">
                    <img class="img_content" src="admin/img/<?php echo $row['img2'] ?>" alt="" style="width: 100%;border-radius: 10%;" /></a>
                <div class="header-content_gender">
                    <h3>Thời trang nữ</h3>
                </div>
            </div>
        </div>
        <!-- content 2 for mobile -->
        <div class="container">
            <img class="bg_banner" src="admin/img/<?php echo $row['img3'] ?>" alt="" />
        </div>
        <!-- content 2 -->
        <!-- Carousel -->
        <div class="slide-content">
            <div id="demo" class="carousel slide " data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="slide-content">
                    <div class="carousel-inner">
                        <div class="carousel-item active slide-content-img">
                            <img src="admin/img/<?php echo $row['img4'] ?>" alt="Los Angeles" class="d-block" style="width: 100%" />
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="carousel-item slide-content-img">
                            <img src="admin/img/<?php echo $row['img5'] ?>" alt="Chicago" class="d-block" style="width: 100%" />
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="carousel-item slide-content-img">
                            <img src="admin/img/<?php echo $row['img6'] ?>" alt="New York" class="d-block" style="width: 100%" />
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="carousel-item slide-content-img">
                            <img src="admin/img/<?php echo $row['img7'] ?>" alt="New York" class="d-block" style="width: 100%" />
                            <div class="carousel-caption">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        <!-- content 3 -->
        <div class="content_video">
            <div class="content_video_demo">
                <video width="100%" height="100%" autoplay muted loop src="../project_webBanHang/video/videodemo.mp4"></video>
            </div>
        </div>
    </div>
<?php
}
?>