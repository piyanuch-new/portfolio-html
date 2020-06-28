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
                <h1 class="sub-header__header / font-size-h3">วิดีโอ</h1>

            </div>


        </div>
    </div>

    <section>
        <div class="update-vdo-detail">

            <div class="update-vdo-detail__vdo">
                <div class="container">
                    <div class="responsive-vdo">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/psla7BMwcfE" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>

            </div>

            <div class="update-vdo-detail__detail">
                <div class="container">
                    <div class="vdo-detail">
                        <header class="vdo-detail__header">
                            <p class="vdo-detail__header__category">
                                <a href="#">ภาพยนตร์โฆษณา</a>
                            </p>
                            <h1 class="vdo-detail__header__head / font-size-h4">
                                <a href="#">ใหม่! อีซูซุดีแมคซ์ บลูเพาเวอร์ ขีดสุดแห่งนวัตกรรมเปลี่ยนโลก</a>
                            </h1>
                        </header>
                        <p class="vdo-detail__detail__text">กับดีไซน์ทุกเส้นสาย ทรงพลัง ดุดัน แข็งแกร่ง
                            เท่เหนือชั้นทุกมุมมอง
                            ยกระดับความหรูหราภายในห้องโดยสาร ล้ำสมัยด้วยเทคโนโลยีไฟ ส่องสว่างใหม่ล่าสุด แบบ Bi-LED
                            ครั้งแรกในวงการปิกอัพเมืองไทย พร้อมนวัตกรรม เครื่องยนต์ดีเซลแห่งอนาคต</p>

                        <aside class="vdo-detail__share">
                            <h1 class="vdo-detail__share__header">แชร์วิดีโอนี้</h1>
                            <ul class="group-share-button  group-share-button_small">
                                <li>
                                    <a href="#">
                                        <img src="assets/images/update/share-fb.png" alt="">
                                        <div class="hide">
                                            share to facebook
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/update/share-tw.png" alt="">
                                        <div class="hide">
                                            share to twitter
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/update/share-link.png" alt="">
                                        <div class="hide">
                                            share link
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/update/share-mail.png" alt="">
                                        <div class="hide">
                                            share to e-mail
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>

            </div>

        </div>


        <div class="container">


            <div class="header-update-page / clearfix">
                <h1 class="header-update-page__header">
                    วิดีโออื่นๆ
                </h1>
            </div>

            <!--List items-->
            <div class="row">

				<?php for ( $i = 0; $i < 10; $i ++ ) { ?>
                    <div class="col-sm-6  col-md-4">
                        <article class="item-news">
                            <div class="item-news__image">
                                <a class="item-news__icon-play" href="#">
                                    <img src="assets/images/update/vdo/thumb.jpg" alt="">

                                </a>
                            </div>

                            <div class="item-news__detail">
                                <header class="item-news__header">
                                    <p class="item-news__header__category">
                                        <a href="#">ข่าวประชาสัมพันธ์</a>
                                    </p>
                                    <h1 class="item-news__header__head / font-size-h4">
                                        <a href="#">อีซูซุตอกย้ำความเชื่อ “ไม่มีที่ใด ที่พลังความดี ไปไม่ถึง” กับ
                                            คาราวาน
                                            “พลังดี…เปลี่ยนโลก” เส้นทางที่ 3 สู่โรงเรียน ตชด. บ้านทิไล่ป้า
                                            สังขละบุรีบ้านทิไล่ป้า สังขละบุรี</a>
                                    </h1>
                                </header>
                                <p class="item-news__detail__text">จากอุดมการณ์อันแรงกล้าของ “ตำรวจตระเวนชายแดน” (ตชด.)
                                    ที่เริ่มต้นจากคำว่า
                                    “เสียสละ” คำๆ นี้ คอยย้ำให้พวกเขาระลึกตลอด เวลาว่า ความผาสุกของประชาชน
                                    และความร่มเย็นของแผ่นดิน
                                    อยู่เหนือชีวิตและความเหนื่อยยากของตำรวจตระเวนชายแดนทุกคน</p>

                                <aside class="item-news__share">
                                    <ul class="group-share-button  group-share-button_small">
                                        <li>
                                            <a href="#">
                                                <img src="assets/images/update/share-fb.png" alt="">
                                                <div class="hide">
                                                    share to facebook
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/images/update/share-tw.png" alt="">
                                                <div class="hide">
                                                    share to twitter
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/images/update/share-link.png" alt="">
                                                <div class="hide">
                                                    share link
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/images/update/share-mail.png" alt="">
                                                <div class="hide">
                                                    share to e-mail
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
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




































