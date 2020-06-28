<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/contact.css">
    <style>

    </style>


</head>

<body class="header-small body-top">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<div class="head-contact">
    <h1>
        ติดต่อตรีเพชรอีซูซุ
        <small>
           ด้วยช่องทางการติดต่อที่หลากหลายของเรา 
        </small>
    </h1>
</div>
<div class="container">
    <ul class="list-contact">
        <li>
            <a href="tel:021180777">
                <span>
                    <img src="assets/images/icon/i-tel.png">
                </span>
                <h1>
                    อีซูซุฮอตไลน์
                </h1>
                <p>
                    บริการข้อมูลอัตโนมัติตลอด 24 ชั่วโมง 
                </p>
            </a>
        </li>
        <li>
            <a href="mailto:info@isuzu-tis.com">
                <span>
                    <img src="assets/images/icon/i-mail.png">
                </span>
                <h1>
                    อีเมล
                </h1>
                <p>
                    อีเมล์ถึงตรีเพชรอีซูซุคลิกที่นี่
                </p>
            </a>
        </li>
        <li>
            <a href="#">
                <span>
                    <img src="assets/images/icon/i-ggmap.png">
                </span>
                <h1>
                    แผนที่กูเกิล
                </h1>
                <p>
                    ที่ตั้งของตรีเพชรอีซูซุผ่านแผนที่กูเกิล
                </p>
            </a>
        </li>
        <li>
            <a href="#">
                <span>
                    <img src="assets/images/icon/i-map.png">
                </span>
                <h1>
                    แผนที่รูปภาพ
                </h1>
                <p>
                    ดูและโหลดแผนที่ของตรีเพชรอีซูซุที่นี่
                </p>
            </a>
        </li>
    </ul>
    <div class="wrap-map">
        <ul>
            <li>
                <strong>ที่อยู่สำนักงานใหญ่</strong>
                <p>
                    บริษัท ตรีเพชรอีซูซุเซลส์ จำกัด<br>
                    1088 ถ.วิภาวดีรังสิต<br>
                    แขวงจตุจักร เขตจตุจักร<br>
                    กรุงเทพฯ 10900
                </p>
            </li>
            <li>
                <strong>โทรศัพท์</strong>
                <p><a href="tel:0-2966-2111">0-2966-2111</a>, <a href="tel:0-2966-2222">0-2966-2222</a></p>
                <strong>อีเมล์</strong>
                <p><a href="mailto:info@isuzu-tis.com">info@isuzu-tis.com</a></p>
            </li>
            <li>
                <strong>อีซูซุฮอตไลน์</strong>
                <img src="assets/images/contact/hotline.jpg">
                <p><a href="tel:021180777">021180777</a></p>
            </li>
        </ul>
        <div id="map"></div>
    </div>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWE1-i1UylxmAoa34dWcMpeVdYujo_qp8&amp;callback=initMap" async="" defer=""></script>

<script type="text/javascript">       
    
var map;
function initMap() {
    var locations = {lat: 13.824433, lng: 100.558624};


    var mapOptions = {
            zoom: 16,
            minZoom: 6,
            maxZoom: 19,                
            gestureHandling: 'greedy',
            zoomControl: false,
            center: locations,
        };
        var mapElement = document.getElementById('map');
        var image = {
            url: 'assets/images/icon/pin.png',
            size: new google.maps.Size(63, 82),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 82)
        };

        var map = new google.maps.Map(mapElement, mapOptions);
        
        google.maps.event.addDomListener(window, "resize", function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center); 
        });

        marker = new google.maps.Marker({
            position: locations,
            map: map,
            icon: image,
        });
    }       


</script> 

</body>

</html>