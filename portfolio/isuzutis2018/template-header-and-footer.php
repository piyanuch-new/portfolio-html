<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>
    <style>

    </style>


</head>

<body class="header-small">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>


<div style="min-height: 500px;">

    <!--Sub header-->
    <section class="sub-header-wrapper">
        <div class="container">


            <!--Sub header product detail -->
            <div class="header-product / clearfix">
                <h1 class="hide">
                    x series
                </h1>

                <a class="header-product__logo" href="#intro">
                    <img class="img-responsive" src="assets/images/header/logo.png" alt="logo x-series">
                </a>

                <button id="headerProductButton" class="header-product__button">
                    <span class="hide">menu</span>
                </button>

                <div id="headerProduct" class="header-product__nav">

                    <ul class="list-unstyled">
                        <li><a class="js-go-to-target" href="#exterior">ดีไซน์ภายนอก</a></li>
                        <li><a class="js-go-to-target" href="#interior">ดีไซน์ภายใน</a></li>
                        <li><a class="js-go-to-target" href="#performance">เครื่องยนต์</a></li>
                        <li><a class="js-go-to-target" href="#powertrain">ระบบส่งกำลัง </a></li>
                        <li><a class="js-go-to-target" href="#safety">ความปลอดภัยและความทนทาน</a></li>
                        <li><a class="js-go-to-target" href="#compare">รุ่นและสีรถ</a></li>
                        <li><a href="#" target="_blank">ข้อมูลรถ</a></li>
                        <li><a class="js-wallpaper-modal" href="#">ดาวน์โหลด</a></li>

                    </ul>
                    <button id="headerProductClose" class="header-product__close">

                        <span class="hide">close</span>
                    </button>
                </div>


            </div>

            <!--Sub header normal page -->
            <div class="sub-header / clearfix">
                <h1 class="sub-header__header / font-size-h3">ประวัติอีซูซุ</h1>
                <nav class="sub-header__menu">
                    <ul class="list-unstyled">
                        <li>

                            <a href="#">
                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/about/menu-history.png" alt="">
                                </span>
                                ประวัติอีซูซุ
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/about/menu-vision-mission.png" alt="">
                                </span>
                                วิสัยทัศน์และพันธกิจ
                            </a>
                        </li>
                        <li>

                            <a href="#">

                                <span class="sub-header__menu__thumb">
                                    <img src="assets/images/about/menu-values-culture.png" alt="">
                                </span>
                                คุณค่าและวัฒนธรรม
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>


</div>

<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>
<script>


</script>

</body>

</html>




































