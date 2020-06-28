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
                    <div class="sub-header-search-box">
                        <form action="#">
                            <div class="search-box">
                                <label>
                                    <input type="text" placeholder="พิมพ์คำที่ต้องการค้นหา">
                                </label>
                                <button type="submit">
                                    <span class="hide">search</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <section>
            <div class="container">

                <!-- Search text result -->
                <p class="search-text-result">ผลการค้นหา 50 รายการ</p>

                <!-- Search result product -->
                <div class="search-result__product">
                    <ul class="list-unstyled owl-carousel">
						<?php

						$car_list = array(
							array(
								'link'  => 'product-detail/v-cross/home.php',
								'image' => 'assets/images/compare/v-cross/4door-max-3.3-z.png',
								'name'  => 'อีซูซุดีแมคซ์ วี-ครอส',
								'price' => '832,000',
							),
							array(
								'link'  => 'product-detail/v-cross/home.php',
								'image' => 'assets/images/compare/v-cross/4door-max-3.3-z.png',
								'name'  => 'อีซูซุดีแมคซ์ วี-ครอส',
								'price' => '832,000',
							),
							array(
								'link'  => 'product-detail/v-cross/home.php',
								'image' => 'assets/images/compare/v-cross/4door-max-3.3-z.png',
								'name'  => 'อีซูซุดีแมคซ์ วี-ครอส',
								'price' => '832,000',
							),
							array(
								'link'  => 'product-detail/v-cross/home.php',
								'image' => 'assets/images/compare/v-cross/4door-max-3.3-z.png',
								'name'  => 'อีซูซุดีแมคซ์ วี-ครอส',
								'price' => '832,000',
							),


						);

						foreach ( $car_list as $k => $v ) {

							?>
                            <li>
                                <div class="search-result-product">
                                    <a class="search-result-product__car" href="<?php echo $car_list[ $k ]['link']; ?>">
                                        <div class="search-result-product__car__image">
                                            <img src="<?php echo $car_list[ $k ]['image']; ?>">
                                        </div>

                                        <p class="search-result-product__name">
											<?php echo $car_list[ $k ]['name']; ?>
                                        </p>
                                    </a>

                                    <div class="product-box-info">
                                        <p class="product-box-info__text">
                                            <span>ราคา</span>
											<?php echo $car_list[ $k ]['price']; ?>
                                            <span>บาท</span>

                                        </p>
                                        <ul class="product-box-info__link">
                                            <li>
                                                <a href="calculator.php">
                                                    <img src="assets/images/icon/compare/i-cal.png">
                                                    คำนวณค่างวด
                                                </a>
                                            </li>
                                            <li>
                                                <a href="test-drive.php">
                                                    <img src="assets/images/icon/compare/i-testdrive.png">
                                                    ทดลองขับ
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dealer-map.php">
                                                    <img src="assets/images/icon/compare/i-dealer.png">
                                                    ผู้จำหน่ายอีซูซุ
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
						<?php } ?>
                    </ul>
                </div>
                <!--List items-->
                <div class="item-news-list-wrapper">
                    <div class="row">

						<?php for ( $i = 0; $i < 10; $i ++ ) { ?>
                            <div class="col-sm-6  col-md-4">
                                <article class="item-news">
                                    <div class="item-news__image">
                                        <a href="update-news-detail.php">
                                            <img src="assets/images/update/news/thumb.png" alt="">
                                        </a>
                                    </div>

                                    <div class="item-news__detail">
                                        <header class="item-news__header">
                                            <p class="item-news__header__category">
                                                <a href="update-news-detail.php">ข่าวประชาสัมพันธ์</a>
                                            </p>
                                            <h1 class="item-news__header__head / font-size-h4">
                                                <a href="update-news-detail.php">
                                                    อีซูซุตอกย้ำความเชื่อ “ไม่มีที่ใด
                                                    ที่พลังความดี ไปไม่ถึง” กับ
                                                    คาราวาน
                                                    “พลังดี…เปลี่ยนโลก” เส้นทางที่ 3
                                                    สู่โรงเรียน ตชด. บ้านทิไล่ป้า
                                                    สังขละบุรีบ้านทิไล่ป้า สังขละบุรี
                                                </a>
                                            </h1>
                                        </header>
                                        <p class="item-news__detail__text">
                                            จากอุดมการณ์อันแรงกล้าของ “ตำรวจตระเวนชายแดน”
                                            (ตชด.) ที่เริ่มต้นจากคำว่า
                                            “เสียสละ” คำๆ นี้ คอยย้ำให้พวกเขาระลึกตลอด
                                            เวลาว่า ความผาสุกของประชาชน
                                            และความร่มเย็นของแผ่นดิน
                                            อยู่เหนือชีวิตและความเหนื่อยยากของตำรวจตระเวนชายแดนทุกคน
                                        </p>
                                    </div>

                                </article>
                            </div>

                            <div class="col-sm-6  col-md-4">
                                <article class="item-news">
                                    <div class="item-news__image">
                                        <a href="update-news-detail.php">
                                            <img src="assets/images/update/news/thumb.png" alt="">
                                        </a>
                                    </div>

                                    <div class="item-news__detail">
                                        <header class="item-news__header">
                                            <p class="item-news__header__category">
                                                <a href="update-news-detail.php">ข่าวประชาสัมพันธ์</a>
                                            </p>
                                            <h1 class="item-news__header__head / font-size-h4">
                                                <a href="update-news-detail.php">อีซูซุส่งมอบระบบน้ำดื่มสะอาด
                                                                                 แก่โรงเรียน
                                                                                 แห่งที่ 25 ในโครงการ
                                                                                 “อีซูซุให้น้ำ…เพื่อชีวิต”
                                                </a>
                                            </h1>
                                        </header>
                                        <p class="item-news__detail__text">กลุ่มอีซูซุในประเทศไทย โดย มร. โทชิอากิ
                                                                           มาเอคาวะ
                                                                           กรรมการ
                                                                           ผู้จัดการ บริษัท ตรีเพชรอีซูซุเซลส์ จำกัด
                                                                           และดร. อรัญญา เฟื่องสวัสดิ์
                                                                           รองอธิบดีกรมทรัพยากรน้ำบาดาล กระทรวง
                                                                           ทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                                                           ร่วมส่งมอบระบบน้ำดื่มสะอาด ในโครงการ
                                                                           “อีซูซุให้น้ำ…เพื่อชีวิต”
                                        </p>
                                    </div>

                                </article>
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
                <li>
                    <a href="#">หน้าหลัก</a>
                </li>
                <li>
                    <a href="#">อีซูซุอัปเดต</a>
                </li>
                <li>
                    <a href="#">ข่าวสารและกิจกรรมอีซูซุ</a>
                </li>
                <li>
                    <a href="#">ข่าวประชาสัมพันธ์</a>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Footer -->
	<?php include_once( 'web-footer.php' ); ?>
    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                dots: true,
                margin: 10,
                autoplay: false,
                navText: [" ", " "],
                responsive: {
                    0: {
                        items: 2

                    },
                    769: {
                        items: 3
                    }
                }
            });
        })
    </script>

</body>

</html>




































