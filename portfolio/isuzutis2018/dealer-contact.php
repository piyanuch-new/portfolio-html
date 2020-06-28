<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/dealer.css">

</head>

<body class="header-small body-top">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<div class="head-contact">
    <h1>
        ติดต่อโชว์รูมหรือศูนย์บริการ
        <small>
            สอบถามข้อมูล แจ้งปัญหาหรือแสดงความคิดเห็นติชม
        </small>
    </h1>
</div>
<div class="container">
    <form>
        <div class="wrap-register">
            <table>
                <tr>
                    <td>
                        ชื่อ-นามสกุล<sup>*</sup>
                    </td>
                    <td>
                       <input type="text" name=""> 
                    </td>
                </tr>
                <tr>
                    <td>
                        เบอร์โทรศัพท<sup>*</sup>
                    </td>
                    <td>
                       <input type="tel" name="" placeholder="0812345678"> 
                    </td>
                </tr>
                <tr>
                    <td>
                        อีเมล
                    </td>
                    <td>
                       <input type="mail" name=""> 
                    </td>
                </tr>
                <tr>
                    <td>
                        ผู้จำหน่าย<sup>*</sup>
                    </td>
                    <td>
                       <input type="text" name="" placeholder="ชื่อผู้จำหน่าย"> 
                    </td>
                </tr>
                <tr>
                    <td>
                        ฝ่ายที่ต้องการติดต่อ<sup>*</sup>
                    </td>
                    <td>
                       <div class="box-select">
                           <select>
                               <option>โชว์รูม</option>
                               <option>ศูนย์บริการ</option>
                           </select>
                       </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        ประเภทการติดต่อ<sup>*</sup>
                    </td>
                    <td>
                       <div class="box-select">
                           <select>
                               <option>สอบถามข้อมูล</option>
                               <option></option>
                           </select>
                       </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        รายละเอียด<sup>*</sup>
                    </td>
                    <td>
                       <textarea rows="4"></textarea>
                       <label class="label-checkbox">
                           <input type="checkbox" name="">
                           <span></span>
                           <p>
                               ข้าพเจ้ายินยอมให้ทางอีซูซุเก็บข้อมูลส่วนตัวที่ระบุไว้ เพื่อวัตถุประสงค์ทางการตลาด
                               การวิจัยการตลาด การติดต่อเพื่อการขาย ทางอีซูซุอาจมีการเปิดเผยข้อมูลนี้ให้กลับกลุ่มอีซูซุ
                               ผู้จำหน่ายอีซูซุ ข้อมูลนี้อาจมีการจัดเก็บ ประมวลผลโดยเจ้าหน้าที่ หรือตัวแทนของอีซูซุ โดยอีซูซุจะใช้ข้อมูลนี้อย่างสมเหตุสมผล ข้อมูลของท่านจะได้รับการรักษาอย่างปลอดภัยและสอดคล้องกับกฏหมายปัจจุบัน
                           </p>
                       </label>
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" name="" value="ยืนยัน">
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWE1-i1UylxmAoa34dWcMpeVdYujo_qp8&amp;callback=initMap" async="" defer=""></script>

    <script type="text/javascript">       
        
    var map;
    function initMap() {
        var locations = {lat: 13.824433, lng: 100.558624};

 
        var mapOptions = {
                zoom: 16,
                minZoom: 6,
                maxZoom: 16,                
                gestureHandling: 'none',
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