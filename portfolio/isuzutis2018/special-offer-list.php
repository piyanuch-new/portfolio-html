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
                <h1 class="sub-header__header / font-size-h3">แคมเพจ์น</h1>
                <nav class="sub-header__menu">
                    <ul class="list-unstyled">
                        <li class="active">

                            <a href="#">
                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/special-offer/menu-1.png" alt="">
                                </span>
                                รถปิกอัพและรถอเนกประสงค์
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/special-offer/menu-2.png" alt="">
                                </span>
                                รถบรรทุก
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
                <h1 class="header-update-page__header / font-size-h3">
                    <span>แคมเพจ์นดีๆ จากอีซูซุ สำหรับ</span>
                    บริการหลังการขายรถปิกอัพและรถอเนกประสงค์
                </h1>
                <nav class="header-update-page__nav">
                    <p>เลือกประเภทของแคมเพจ์น</p>
                    <div id="tisDropDown" class="header-update-page__nav__list">
                        <div id="tisDropDownBtn">บริการหลังการขาย</div>
                        <ul id="tisDropDownList" class="list-unstyled">
                            <li><a href="#">บริการหลังการขาย</a></li>
                            <li><a href="#">xxx</a></li>
                            <li><a href="#">xxx</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="clear-item-2-column">
                <!--List items-->
                <div class="row">

					<?php for ( $i = 0; $i < 10; $i ++ ) { ?>
                        <div class="col-sm-6">
                            <article class="item-news  item-news_special-offer">
                                <div class="item-news__image">
                                    <a class="item-news__icon-play" href="special-offer-detail.php">
                                        <img src="assets/images/update/special-offer/thumb.jpg" alt="">

                                    </a>
                                </div>

                                <div class="item-news__detail">
                                    <header class="item-news__header">

                                        <h1 class="item-news__header__head / font-size-h4">
                                            <a href="special-offer-detail.php">เหนือระดับ…กับเอกสิทธิ์พิเศษที่มากกว่า
                                                เมื่อซื้อ
                                                ใหม่! อีซูซุมิว-เอ็กซ์ บลูเพาเวอร์</a>
                                        </h1>
                                    </header>


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




































