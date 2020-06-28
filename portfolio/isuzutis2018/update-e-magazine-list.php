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
                <h1 class="sub-header__header / font-size-h3">อีซูซุแมกาซีนออนไลน์</h1>
                <nav class="sub-header__menu">
                    <ul class="list-unstyled">
                        <li class="active">

                            <a href="#">
                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/e-magazine/menu-tripetch-magazine.png" alt="">
                                </span>
                                ตรีเพชร แมกกาซีน
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/e-magazine/menu-truck-today.png" alt="">
                                </span>
                                อีซูซุทรัคทูเดย์
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/e-magazine/menu-vip-club.png" alt="">
                                </span>
                                อีซูซุมิว-เอ็กซ์ วี.ไอ.พี. คลับ
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>

    <section class="wrapper-list-content">
        <div class="container">


            <!--List items-->
            <div class="row">

				<?php for ( $i = 0; $i < 10; $i ++ ) { ?>
                    <div class="col-sm-6">
                        <article class="item-e-magazine">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="item-e-magazine__image">
                                        <a href="update-news-detail.php">
                                            <img src="assets/images/update/e-magazine/image.jpg" alt="">
                                        </a>
                                    </div>


                                </div>
                                <div class="col-lg-6">
                                    <div class="item-e-magazine__wrapper-content">
                                        <header class="item-e-magazine__header">
                                            <h1 class="item-e-magazine__header__head / font-size-h5">
                                                <a href="update-news-detail.php">วารสารเพื่อผู้ใช้รถบรรทุกอีซูซุ ฉบับ 04/60</a>
                                            </h1>
                                            <p class="item-e-magazine__header__more">
                                                วารสารอีซูซุมิวเอ็กซ์ วี.ไอ.พี.คลับ <br>
                                                ฉบับ 04/2017 เมษายน - มิถุนายน 2560
                                            </p>
                                        </header>
                                        <p class="item-e-magazine__text-detail">
                                            ในฉบับนี้ ก็จะขออัพเดทกิจกรรมต่างๆ ที่อีซูซุ จัดขึ้น เพื่อเฉลิมฉลอง
                                            ในวาระครบรอบ 60
                                            ปี ของการ ดำเนินธุรกิจอีซูซุในประเทศไทย สำหรับคอลัมน์ “The Leader”
                                            อีซูซุได้รับ
                                            เกียรติจาก คุณ “มิกค์ ทองระย้า” พระเอกหนุ่ม ชื่อดัง ที่เข้ามาเป็นสมาชิก ใหม่
                                            ของครอบครัว
                                            The New Isuzu MU-X มา บอกเล่าถึงความ ประทับใจที่มีต่อรถอีซูซุ
                                        </p>
                                        <p class="item-e-magazine__button / button-wrapper"><a class="button" href="update-news-detail.php">อ่านทั้งหมด</a></p>
                                    </div>
                                </div>
                            </div>


                        </article>
                    </div>


				<?php } ?>
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




































