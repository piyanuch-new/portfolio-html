<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/update.css">
    <style>

    </style>


</head>

<body class="header-small">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<!--Margin between content to footer and content to header-->
<section class="margin-main-content">

    <!--Sub header-->
    <div class="sub-header-wrapper">
        <div class="container">
            <!--Sub header normal page -->
            <div class="sub-header / clearfix">
                <h1 class="sub-header__header / font-size-h3">ข่าวสารและกิจกรรมอีซูซุ</h1>
                <nav class="sub-header__menu">
                    <ul class="list-unstyled">
                        <li class="active">

                            <a href="#">
                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/vdo/menu-advertising.png" alt="">
                                </span>
                                ภาพยนตร์โฆษณา
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/vdo/menu-about-product.png" alt="">
                                </span>
                                เกี่ยวกับผลิตภัณฑ์
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/vdo/menu-technology.png" alt="">
                                </span>
                                เทคโนโลยี
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/vdo/menu-public-relations.png" alt="">
                                </span>
                                ประชาสัมพันธ์
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>

    <section>
        <div class="container">

            <!-- Header for update page -->
            <div class="header-update-page / clearfix">
                <h1 class="header-update-page__header">
                    ข่าวประชาสัมพันธ์
                </h1>
                <nav class="header-update-page__nav">
                    <p href="#">ดูย้อนหลัง</p>
                </nav>
            </div>

            <!--List items-->
            <div class="item-voice-layout">
                <div class="row">

		            <?php for ( $i = 0; $i < 10; $i ++ ) { ?>
                        <div class="col-sm-6  col-md-12">
                            <section class="item-voice">


                                <div class="item-voice__image">
                                    <a class="item-voice__icon-play" href="#">
                                        <img src="assets/images/update/voice/thumb.jpg" alt="">

                                    </a>
                                </div>


                                <div class="item-voice__detail">
                                    <blockquote class="item-voice__detail__quote / h1">
                                        “สำหรับผมแล้ว หากจะให้นิยาม
                                        ความเป็น The New Isuzu MU-X
                                        คันนี้ คือ รถยนต์ที่ ใช้งานได้จริง
                                        คุ้มค่า และประหยัด”
                                    </blockquote>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h1 class="item-voice__detail__name">
                                                <span>มิกค์ ทองระย้า</span>
                                                <small>นักแสดงมากความสามารถ</small>
                                            </h1>

                                        </div>

                                        <div class="col-md-6">

                                            <p class="item-voice__button / button-wrapper"><a class="button" href="update-voice-detail.php">อ่านทั้งหมด</a>
                                            </p>
                                        </div>
                                    </div>


                                </div>


                            </section>
                        </div>


		            <?php } ?>
                </div>
            </div>
        </div>

        <p class="button-wrapper  button-wrapper_center">
            <a href="#" class="button">
                ดูรูปเพิ่มเติม
            </a>
        </p>
    </section>


</section>
<div class="container">

    <nav class="web-breadcrumb">
        <h1 class="hide">breadcrumb</h1>
        <ol class="list-unstyled">
            <li><a href="#">หน้าหลัก</a></li>
            <li><a href="#">อีซูซุอัปเดต</a></li>
            <li><a href="#">ข่าวสารและกิจกรรมอีซูซุ</a></li>
            <li><a href="#">ข่าวประชาสัมพันธ์</a></li>
        </ol>
    </nav>
</div>

<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>
<script>


</script>

</body>

</html>




































