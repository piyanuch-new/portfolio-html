<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/dealer-dev.css">

</head>

<body class="header-small">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<section class="margin-main-content">
    <!--Sub header-->
    <div class="sub-header-wrapper">
        <div class="container">
            <!--Sub header normal page -->
            <div class="sub-header / clearfix">
                <h1 class="sub-header__header / font-size-h3">ผู้จำหน่ายอีซูซุ</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrap-dealer">
            <div class="dealer-list">
                <h2>
                    คุณสามารถค้นหาผู้จำหน่ายอีซูซุใกล้บ้านคุณได้ที่นี่
                </h2>
                <div class="box-select">
                    <select>
                        <option>
                            กรุงเทพมหานคร
                        </option>
                        <option>
                            กาญจนบุรี
                        </option>
                        <option>
                            กาฬสินธุ์
                        </option>
                    </select>
                </div>
                <h2 class="name-result">
                    กรุงเทพมหานคร
                </h2>
                <ul class="branch-list">
                    <li>
                        <div class="branch-contact">
                            <p>
                                <strong>บริษัท อีซูซุคิงส์ยนต์กรุงเทพ จำกัด</strong>
                                5/29 หมู่ 4 ถนนรามอินทรา กม. 2 แขวงอนุสาวรีย์ เขตบางเขน 
                                กรุงเทพฯ 10220
                            </p> 
                            <p>
                                เบอร์โทรผู้จำหน่าย <b>0-2552-8865-87</b>
                            </p> 
                        </div>
                        <div class="branch-btn">  
                            <a class="btn-googlemap" data-lat="13.83729" data-lng="100.66468">
                                ที่ตั้งศูนย์บริการ
                            </a>                                                        
                            <a class="btn-display-map" data-toggle="modal" data-target="#myModal" href="#" rel="http://isuzu-tis.com/wp-content/uploads/2014/10/3.jpg">
                                แผนที่ผู้จำหน่าย
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="branch-contact">
                            <p>
                                <strong>บริษัท อีซูซุคิงส์ยนต์กรุงเทพ จำกัด</strong>
                                5/29 หมู่ 4 ถนนรามอินทรา กม. 2 แขวงอนุสาวรีย์ เขตบางเขน 
                                กรุงเทพฯ 10220
                            </p> 
                            <p>
                                เบอร์โทรผู้จำหน่าย <a href="tel:025528865">0-2552-8865-87</a>
                            </p> 
                        </div>
                        <div class="branch-btn">  
                            <a class="btn-googlemap" data-lat="13.80539" data-lng="100.53288">
                                ที่ตั้งศูนย์บริการ
                            </a>   
                        </div>
                    </li>
                    <li>
                        <div class="branch-contact">
                            <p>
                                <strong>บริษัท อีซูซุคิงส์ยนต์กรุงเทพ จำกัด</strong>
                                5/29 หมู่ 4 ถนนรามอินทรา กม. 2 แขวงอนุสาวรีย์ เขตบางเขน 
                                กรุงเทพฯ 10220
                            </p> 
                            <p>
                                เบอร์โทรผู้จำหน่าย <a href="tel:025528865">0-2552-8865-87</a>
                            </p> 
                        </div>
                        <div class="branch-btn">  
                            <a class="btn-googlemap" data-lat="13.83729" data-lng="100.66468">
                                ที่ตั้งศูนย์บริการ
                            </a>                                                        
                            <a class="btn-display-map" data-toggle="modal" data-target="#myModal" href="#" rel="http://isuzu-tis.com/wp-content/uploads/2014/10/37.jpg">
                                แผนที่ผู้จำหน่าย
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="dealer-map">
                <div class="canvasmap" id="map"></div>
            </div>
        </div>
    </div>
</section>
<div class="popup-dealer">
    <div class="mesk"></div>
    <div class="inner-popup">
        <a class="btn-close">✖</a>
        <div class="box-map"></div>
        <a class="download-btn" download="" target="_blank">ดาวน์โหลดแผนที่</a>
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

    var link = document.getElementsByClassName('btn-googlemap');
    for(var i = 0; i < link.length; i++){
        google.maps.event.addDomListener(link[i], 'click', function () {
            $(this).each(function(){
                var lat = $(this).data("lat"),
                    lng = $(this).data("lng"),
                    latlng = new google.maps.LatLng(lat,lng);
                map.setCenter(latlng);
                marker.setPosition(latlng); 
            });
        });
    }
}       
$(document).ready(function () {
    $(".btn-display-map").click(function(){
        var img = $(this).attr("rel");
        $(".popup-dealer").addClass("active");
        $(".box-map").html("<img src="+img+">");
        $(".download-btn").attr("href", img);           
    });
    $(".btn-close, .mesk").click(function(){
        $(".popup-dealer").removeClass("active");
        $(".download-btn").attr("href", "");           
    });
});
</script> 

</body>

</html>