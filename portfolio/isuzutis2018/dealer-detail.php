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
<?php include( 'web-header.php' ); ?>

<!--Margin between content to footer and content to header-->
<section class="margin-main-content">

    <?php include( 'head-dealer.php' ); ?>
    <div class="wrap-list">
        <div class="container">
            <div class="main-list list-detail">
                <div class="head-result">
                    <h2>
                        กรุงเทพมหานคร
                        <p>( ผลการค้นหามี 10 ศูนย์บริการ )</p>
                    </h2>
                    <table class="table-service">
                        <tr>
                            <th>
                                โชว์รูม
                            </th>
                            <th>
                                จำหน่ายรถบรรทุกอีซูซ
                            </th>
                            <th>
                                ศูนย์บริการทั่วไป
                            </th>
                            <th>
                                ศูนย์บริการรถบรรทุก
                            </th>
                            <th>
                                เช็คระยะด่วนพิเศษ
                            </th>
                        </tr>
                    </table>
                </div>
                <div class="detail-result">                   
                    <div class="list-result active">
                        <a class="link-list" data-lat="13.913501" data-lng="100.409187">
                            <h3>
                                บริษัท โค้วยู่ฮะอีซูซุเซลส์ จำกัด
                            </h3>
                            <table class="table-service">
                                <tr>
                                    <td class="have-service"></td>
                                    <td class="have-service"></td>
                                    <td class="have-service"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </a>   
                        <div class="detail-list">
                            <div class="detail-txt">
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="assets/images/icon/dealer/i-tel.png">
                                            <p>โทรศัพท์</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="assets/images/icon/dealer/i-imessage.png">
                                            <p>ส่งข้อความ</p>
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
                                            <img src="assets/images/icon/dealer/i-ggmap.png">
                                            <p>แผนที่กูเกิล</p>
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
                                                5/29 หมู่ 4 ถนนรามอินทรา กม. 2<br>
                                                แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพฯ 10220
                                            </p>
                                        </li>
                                        <li>
                                            <img src="assets/images/icon/dealer/i-tel-mini.png">
                                            <p>0-2552-8865-87<br>0-2552-8865-87</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service">
                                    <strong>
                                        โชว์รูม
                                    </strong>
                                    <ul>
                                        <li>
                                            อีซูซุดีแมคซ์
                                        </li>
                                        <li>
                                            อีซูซุมิว-เอ็กซ์
                                        </li>
                                        <li>
                                            รถบรรทุกอีซูซุ
                                        </li>
                                    </ul>
                                </div>
                                <div class="row-btn">
                                    <a class="a-prt">
                                        <img src="assets/images/icon/dealer/i-print.png">
                                        พิมพ์
                                    </a>
                                    <a href="test-drive.php" class="a-drive">                                        
                                        <img src="assets/images/icon/dealer/i-drive.png">
                                        ทดลองขับ
                                    </a>
                                </div>
                            </div>
                            <div class="detail-canvas">
                                <div id='canvas'></div>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>    
        </div>        
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
<script src="https://maps.googleapis.com/maps/api/js??v=3&libraries=places&key=AIzaSyAWE1-i1UylxmAoa34dWcMpeVdYujo_qp8&amp;callback=initMap" async="" defer=""></script>

<script>   
    function initMap() {
        var lat = $(".link-list").attr("data-lat"),
            lng = $(".link-list").attr("data-lng");

        var map;
        var locations = new google.maps.LatLng(13.913501, 100.409187);

        var mapOptions = {
                zoom: 16,
                minZoom: 10,
                maxZoom: 19,                
                gestureHandling: 'none',
                center: locations, 
                mapTypeControl: false,
                streetViewControl: false,
                gestureHandling: 'greedy',
            };
        var mapElement = document.getElementById('canvas');
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