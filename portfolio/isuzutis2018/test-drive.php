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
    <form class="form-padding" action="test-drive-thank-you.php">

        <!--field 1-->
        <div class="form-section">
            <div class="row">
                <div class="col-sm-6">
                    <fieldset>
                        <legend>
                            เลือกรถที่ต้องการทดลองขับ

                        </legend>
                        <!--row 1-->
                        <div class="row">
                            <div class="col-xs-4">
                                <label>
                                    เลือกประเภทรถ <strong>*</strong>
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <select>
                                    <option>รถอีซูซุดีแมคซ์</option>
                                    <option>รถอีซูซุดีแมคซ์</option>
                                    <option>รถอีซูซุดีแมคซ์</option>
                                </select>
                            </div>
                        </div>


                    </fieldset>

                    <fieldset>
                        <legend>
                            ระบุข้อมูลของท่าน


                        </legend>
                        <!--row 2-->
                        <div class="row">
                            <div class="col-xs-4">
                                <label>
                                    ชื่อ-นามสกุล <strong>*</strong>
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text">
                            </div>
                        </div>

                        <!--row 3-->
                        <div class="row">
                            <div class="col-xs-4">
                                <label>
                                    เบอร์โทรศัพท์ <strong>*</strong>
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text">
                            </div>
                        </div>

                        <!--row 4-->
                        <div class="row">
                            <div class="col-xs-4">
                                <label>
                                    อีเมล
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text">
                            </div>
                        </div>


                    </fieldset>

                </div>
                <div class="col-sm-6">
                    <div>
                        <img class="img-responsive" src="assets/images/compare/4x2-1.9-DVD-AT.png" alt="">
                    </div>
                    <p class="text-center / font-weight-bold">รถอีซูซุดีแมคซ์</p>
                </div>
            </div>

        </div>


        <!--field 2-->
        <div class="form-section">
            <div class="row">
                <div class="col-sm-6">
                    <fieldset>
                        <legend>
                            เลือกรถที่ต้องการทดลองขับ

                        </legend>
                        <!--row 1-->
                        <div class="row">
                            <div class="col-xs-4">
                                <label>
                                    จังหวัด <strong>*</strong>
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <select>
                                    <option>กรุณาเลือกจังหวัด</option>
                                    <option>กรุณาเลือกจังหวัด</option>
                                    <option>กรุณาเลือกจังหวัด</option>
                                </select>
                            </div>
                        </div>

                        <!--row 2-->
                        <div class="row">
                            <div class="col-xs-4">
                                <label>
                                    อำเภอ/เขต <strong>*</strong>
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <select>
                                    <option>กรุณาเลือกอำเภอ</option>
                                    <option>กรุณาเลือกอำเภอ</option>
                                    <option>กรุณาเลือกอำเภอ</option>
                                </select>
                            </div>
                        </div>

                        <!--row 3-->
                        <div class="row">
                            <div class="col-xs-4">
                                <label>
                                    ผู้จำหน่าย <strong>*</strong>
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <select>
                                    <option>กรุณาเลือกผู้จำหน่าย</option>
                                    <option>กรุณาเลือกผู้จำหน่าย</option>
                                    <option>กรุณาเลือกผู้จำหน่าย</option>
                                </select>
                            </div>
                        </div>


                    </fieldset>


                </div>
                <div class="col-sm-6">
                    <div class="test-drive-nav">
                        <h2 class="font-size-h4">บริษัท อีซูซุคิงส์ยนต์กรุงเทพ จำกัด </h2>
                        <ul class="test-drive-nav__list">
                            <li>
                                <div>
                                    <img src="assets/images/test-drive/5.png" alt="">
                                </div>
                                โทรศัพท์
                            </li>
                            <li>
                                <div>
                                    <img src="assets/images/test-drive/6.png" alt="">
                                </div>
                                แผนที่รูปภาพ
                            </li>
                            <li>
                                <div>
                                    <img src="assets/images/test-drive/7.png" alt="">
                                </div>
                                แผนที่กูเกิล
                            </li>
                            <li>
                                <div>
                                    <img src="assets/images/test-drive/8.png" alt="">
                                </div>
                                สร้างเส้นทาง
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-next-block">
                        <fieldset class="test-drive-address">
                            <legend>
                                ข้อมูลผู้จำหน่าย


                            </legend>

                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="assets/images/test-drive/1.png" alt="">
                                </div>
                                <div class="col-xs-8">
                                    <p>บริษัท อีซูซุคิงส์ยนต์กรุงเทพ จำกัด</p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="assets/images/test-drive/2.png" alt="">
                                </div>
                                <div class="col-xs-8">
                                    <p>5/29 หมู่ 4 ถนนรามอินทรา กม. 2 แขวงอนุสาวรีย์
                                        เขตบางเขน กรุงเทพฯ 10220</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="assets/images/test-drive/3.png" alt="">
                                </div>
                                <div class="col-xs-8">
                                    <p>0-2552-8865-87, 0-2552-8865-87</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="assets/images/test-drive/4.png" alt="">
                                </div>
                                <div class="col-xs-8">
                                    <ul>
                                        <li>• โชว์รูม / ผู้จำหน่าย</li>
                                        <li>• ศูนย์บริการทั่วไป</li>
                                        <li>• ศูนย์ซ่อมสีและตัวถัง</li>
                                        <li>• บริการอื่นๆ</li>
                                    </ul>
                                </div>
                            </div>


                        </fieldset>
                    </div>


                </div>
                <div class="col-sm-6">
                    <div class="form-next-block">
                        <div class="test-drive-map">
                            <h2 class="font-size-normal">แผนที่ผู้จำหน่าย</h2>
                            <div class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15497.318126739121!2d100.5577409!3d13.819240449999999!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sth!2sth!4v1520578765017" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!--button submit-->
        <div class="form-button-wrapper">
            <button type="submit">ยืนยัน</button>
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