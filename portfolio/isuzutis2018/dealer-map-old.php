<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/dealer.css">
    <style>

    </style>


</head>

<body class="header-small">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<!--Margin between content to footer and content to header-->
<section class="margin-main-content">

    <?php include( 'head-dealer.php' ); ?>
    <div class="wrap-map">            
        <div id="map"></div>
        <div class="detail-map">
            <h1></h1>
            <ul>
                <li>
                    <a href="">
                        <img src="assets/images/icon/dealer/i-ggmap.png">
                        <p>แผนที่กูเกิล</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/images/icon/dealer/i-map.png">
                        <p>แผนที่กราฟฟิค</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/images/icon/dealer/i-tel.png">
                        <p>โทรศัพท์</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="assets/images/icon/dealer/i-direct.png">
                        <p>สร้างเส้นทาง</p>
                    </a>
                </li>
            </ul>
            <div class="info">
                <strong>ข้อมูลศูนย์บริการ</strong>
                <ul>
                    <li>
                        <img src="assets/images/icon/dealer/i-info.png">
                        <p>บริษัท อีซูซุคิงส์ยนต์กรุงเทพ จำกัด</p>
                    </li>
                    <li>
                        <img src="assets/images/icon/dealer/i-pin.png">
                        <p>
                            5/29 หมู่ 4 ถนนรามอินทรา กม. 2 แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพฯ 10220
                        </p>
                    </li>
                    <li>
                        <img src="assets/images/icon/dealer/i-tel-mini.png">
                        <p>0-2552-8865-87<br>0-2552-8865-87</p>
                    </li>
                    <li>
                        <ul>
                            <li>โชว์รูม / ผู้จำหน่าย</li>
                            <li>ศูนย์บริการทั่วไป</li>
                            <li>ศูนย์ซ่อมสีและตัวถัง</li>
                            <li>บริการอื่นๆ</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="btn-close">✖</a>
        </div>
        <div class="popup-map"></div>
    </div>
</section>

<div class="container">
    <nav class="web-breadcrumb">
        <h1 class="hide">breadcrumb</h1>
        <ol class="list-unstyled">
            <li><a href="#">หน้าหลัก</a></li>
            <li><a href="#">ติดต่ออีซูซ</a></li>
            <li><a href="#">ผู้จำหน่ายอีซูซุ</a></li>
        </ol>
    </nav>
</div>


<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>
<script src="<?php echo $root_path; ?>/assets/js/wow.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js??v=3&libraries=places&key=AIzaSyAWE1-i1UylxmAoa34dWcMpeVdYujo_qp8&amp;callback=initMap" async="" defer=""></script>
<script src="<?php echo $root_path; ?>/assets/js/markerclusterer.js"></script>

<script src="<?php echo $root_path; ?>/assets/js/dealer.js"></script>


</body>

</html>