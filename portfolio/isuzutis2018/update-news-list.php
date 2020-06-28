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
                                    <img src="assets/images/update/menu-news.png" alt="">
                                </span>
                                ข่าวประชาสัมพันธ์
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/menu-social-activities.png"
                                         alt="">
                                </span>
                                กิจกรรมเพื่อสังคม
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/menu-isuzu-society.png" alt="">
                                </span>
                                อีซูซุโซไซตี้
                            </a>
                        </li>
                        <li>

                            <a href="update-voice-list.php">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/update/menu-real-user-feedback.png"
                                         alt="">
                                </span>
                                เสียงจากผู้ใช้จริง
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
                                            <a href="update-news-detail.php">อีซูซุตอกย้ำความเชื่อ “ไม่มีที่ใด
                                                ที่พลังความดี ไปไม่ถึง” กับ
                                                คาราวาน
                                                “พลังดี…เปลี่ยนโลก” เส้นทางที่ 3 สู่โรงเรียน ตชด. บ้านทิไล่ป้า
                                                สังขละบุรีบ้านทิไล่ป้า สังขละบุรี</a>
                                        </h1>
                                    </header>
                                    <p class="item-news__detail__text">จากอุดมการณ์อันแรงกล้าของ “ตำรวจตระเวนชายแดน”
                                        (ตชด.) ที่เริ่มต้นจากคำว่า
                                        “เสียสละ” คำๆ นี้ คอยย้ำให้พวกเขาระลึกตลอด เวลาว่า ความผาสุกของประชาชน
                                        และความร่มเย็นของแผ่นดิน
                                        อยู่เหนือชีวิตและความเหนื่อยยากของตำรวจตระเวนชายแดนทุกคน</p>
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
                                            <a href="update-news-detail.php">อีซูซุส่งมอบระบบน้ำดื่มสะอาด แก่โรงเรียน
                                                แห่งที่ 25 ในโครงการ “อีซูซุให้น้ำ…เพื่อชีวิต”</a>
                                        </h1>
                                    </header>
                                    <p class="item-news__detail__text">กลุ่มอีซูซุในประเทศไทย โดย มร. โทชิอากิ มาเอคาวะ
                                        กรรมการ
                                        ผู้จัดการ บริษัท ตรีเพชรอีซูซุเซลส์ จำกัด และดร. อรัญญา เฟื่องสวัสดิ์
                                        รองอธิบดีกรมทรัพยากรน้ำบาดาล กระทรวง ทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                        ร่วมส่งมอบระบบน้ำดื่มสะอาด ในโครงการ “อีซูซุให้น้ำ…เพื่อชีวิต”</p>
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




































