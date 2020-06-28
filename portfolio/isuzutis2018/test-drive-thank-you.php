<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/test-drive.css">
    <style>

    </style>


</head>

<body class="header-small body-top">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<div class="header-banner" style="background-image: url(assets/images/test-drive/bg.jpg);">
    <div class="header-banner__text">
        <h1>
            ทดลองขับ

        </h1>
        <p>สร้างประสบการณ์พิเศษของคุณ ด้วยการสัมผัสรถจริง</p>
    </div>
</div>
<div class="container">
    <form class="form-padding">

        <!--field 1-->
        <div class="form-section">
            <div class="test-drive-thank">
                <h1 class="font-size-h2">
                    ระบบได้รับข้อมูลของท่านแล้ว
                </h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="test-drive-thank__img">
                            <img class="img-responsive" src="assets/images/test-drive/car-example.png" alt="">
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="test-drive-thank__list">
                            <dl>
                                <div>
                                    <dt>รถที่ต้องการทดลองขับ</dt>
                                    <dd>อีซูซุดีแมคซ์
                                    </dd>
                                </div>
                                <div>
                                    <dt>ชื่อ-นามสกุล</dt>
                                    <dd>JEAB NOPPADOL</dd>
                                </div>
                                <div>
                                    <dt>เบอร์โทรศัพท์</dt>
                                    <dd>0851885889</dd>
                                </div>
                                <div>
                                    <dt>อีเมล</dt>
                                    <dd>Jeabbb@gmail.com
                                    </dd>
                                </div>
                                <div>
                                    <dt>ผู้จำหน่าย</dt>
                                    <dd>อีซูซุคิงส์ยนต์กรุงเทพ จำกัด</dd>
                                </div>
                            </dl>
                        </div>


                    </div>
                </div>
                <p class="text-center / font-weight-bold">
                    ท่านจะได้รับการติดต่อกลับจากผู้จำหน่ายที่ท่านได้เลือกไว้ <br>
                    ขอขอบคุณเป็นอย่างสูง สำหรับความสนใจรถอีซูซุ

                </p>
            </div>

        </div>


        <!--button submit-->
        <div class="form-button-wrapper">
            <a class="form-button" href="test-drive.php">กลับหน้าทดลองขับ</a>
        </div>
    </form>
</div>

<div class="container">

    <nav class="web-breadcrumb">
        <h1 class="hide">breadcrumb</h1>
        <ol class="list-unstyled">
            <li><a href="#">หน้าหลัก</a></li>
            <li><a href="#">ติดต่ออีซูซ</a></li>
            <li><a href="#">ติดต่อตรีเพชรอีซูซุ</a></li>
        </ol>
    </nav>
</div>


<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>
<script src="<?php echo $root_path; ?>/assets/js/wow.min.js"></script>
<script>


</script>


</body>

</html>