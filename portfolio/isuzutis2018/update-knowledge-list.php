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
                <h1 class="sub-header__header / font-size-h3">เรื่องน่ารู้กับอีซูซุ</h1>

            </div>


        </div>
    </div>

    <section>
        <div class="container">

            <!-- Header for update page -->
            <div class="header-update-page / clearfix">
                <h1 class="header-update-page__header">
                    เรื่องน่ารู้กับอีซูซุทั้งหมด
                </h1>
                <nav class="header-update-page__nav">
                    <p href="#">เรื่องน่ารุ้กับอีซูซุตามประเภท</p>
                </nav>
            </div>

            <!--List items-->
            <ul class="row / list-unstyled">

				<?php for ( $i = 0; $i < 3; $i ++ ) { ?>
                    <!--Type 1-->
                    <li class="col-sm-6  col-md-4">
                        <div class="item-knowledge">
                            <div class="item-knowledge__image">
                                <a href="update-news-detail.php">
                                    <img src="assets/images/update/knowledge/thumb.jpg" alt="">
                                </a>
                            </div>

                            <div class="item-knowledge__detail">
                                <div>
                                    <img src="assets/images/update/knowledge/icon-to-do.jpg" alt="">
                                </div>
                                <div>
                                    <a class="h4" href="update-news-detail.php">ข้อควรทำเมื่อน้ำมันใกล้หมด</a>
                                </div>
                            </div>


                        </div>
                    </li>

                    <!--Type 2-->
                    <div class="col-sm-6  col-md-4">

                        <div class="item-knowledge">
                            <div class="item-knowledge__image">
                                <a href="update-news-detail.php">
                                    <img src="assets/images/update/knowledge/thumb2.jpg" alt="">
                                </a>
                            </div>

                            <div class="item-knowledge__detail">
                                <img src="assets/images/update/knowledge/icon-to-fix.jpg" alt="">
                                <a href="update-news-detail.php">รถมีอาการเหินน้ำ แก้อย่างไรดี</a>
                            </div>


                        </div>
                    </div>

                    <!--Type 3-->
                    <div class="col-sm-6  col-md-4">

                        <div class="item-knowledge">
                            <div class="item-knowledge__image">
                                <a href="update-news-detail.php">
                                    <img src="assets/images/update/knowledge/thumb3.jpg" alt="">
                                </a>
                            </div>

                            <div class="item-knowledge__detail">
                                <img src="assets/images/update/knowledge/icon-should-not-do.jpg" alt="">
                                <a href="update-news-detail.php">สายซิ่งต้องรู้! ขับเท่าไรไม่โดนจับ</a>
                            </div>


                        </div>
                    </div>
				<?php } ?>
            </ul>
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




































