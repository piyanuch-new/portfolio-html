<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/innovative.css">

<script type="text/javascript">
    $(document).ready(function () {
        $(".dropdrown-list > a").click(function(){
            $(".dropdrown-list").toggleClass("active");
        })
    });
</script>


</head>

<body class="header-small">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<!--Margin between content to footer and content to header-->
<section class="margin-main-content page-teletec">
    <!--Sub header-->
    <div class="sub-header-wrapper">
        <div class="container">
            <!--Sub header normal page -->
            <div class="sub-header / clearfix">
                <div class="dropdrown-list">
                    <a>
                        นวัตกรรมและเทคโนโลยีของอีซูซุ
                    </a>
                    <ul>
                        <li>
                            <a href="innovative-engine.php">
                                • เครื่องยนต์ 1.9 ดีดีไอ
                            </a>
                        </li>
                        <li>
                            <a href="innovative-insight.php">
                                • อีซูซุอินไซน์
                            </a>
                        </li>
                        <li>
                            <a href="innovative-teletec.php">
                                • เทเลเทค
                            </a>
                        </li>
                        <li>
                            <a href="innovative-iesc.php">
                                • ระบบควบคุมการทรงตัวอัจฉริยะ (IESC)
                            </a>
                        </li>
                        <li>
                            <a href="innovative-smoother.php">
                                • อีซูซุ สมูธเทอร์
                            </a>
                        </li>
                    </ul>
                </div>
                <h1 class="sub-header__header / font-size-h3">
                    <img src="assets/images/about/innovative/teletec/logo.png" alt="">
                    มิติใหม่...แห่งเทคโนโลยีโลจิสติกส์
                </h1>
            </div>
        </div>
    </div>
    <section class="hightlight">
        <div class="container">
            <div class="detail-hightlight">
                <h1>
                    <small>
                        นวัตกรรมและเทคโนโลยี
                    </small>
                    “เทเลเทค”
                </h1>
                <p>
                    ...มิติใหม่แห่งเทคโนโลยีโลจิสติกส์<br>
                    ระบบจัดการและเพิ่มประสิทธิภาพงานขนส่ง
                </p>                
            </div>
            <img src="assets/images/about/innovative/teletec/hightlight.jpg">
        </div>
    </section>
    <section class="detail">
        <div class="container">
            <h1>
                “เทเลเทค”
            </h1>
            <p>
                เป็นมากกว่า GPS ทั่วไป พัฒนาโดยผู้นำวงการรถบรรทุกเมืองไทย<br>เพื่อให้เป็นระบบจัดการและเพิ่มประสิทธิภาพงานขนส่ง<br>
                ใช้งานง่าย ข้อมูลชัดเจน แผนที่แม่นยำติดตามทั้งรถ และพฤติกรรมการขับขี่ของคนขับ<br>ช่วยเพิ่มผลกำไรในธุรกิจขนส่ง
            </p>
        </div>
    </section>
    <section class="bg-gray sec-statistic">
        <div class="container">
            <h1>
                <img src="assets/images/about/innovative/teletec/h-statistic.png">
                เพิ่มประสิทธิภาพธุรกิจ...เพียงปลายนิ้ว
            </h1>
            <ul class="row-statistic">
                <li>
                    <div class="img-statistic">
                        <img src="assets/images/about/innovative/teletec/statistic-01.jpg">
                    </div>
                    <h2>
                        ใช้งานง่ายกว่า
                    </h2>
                    <p>
                        ติดตามทุกความเคลื่อนไหวของรถจากระบบ GPS<br>
                        ผ่านหน้าจอเว็บไซต์ และ Mobile Application<br>
                        รองรับทั้งระบบ Android และ iOS
                    </p>
                </li>
                <li>
                    <div class="img-statistic">
                        <img src="assets/images/about/innovative/teletec/statistic-02.jpg">
                    </div>
                    <h2>
                        แม่นยำกว่า
                    </h2>
                    <p>
                        ด้วยแผนที่ลิขสิทธิ์แท้จาก Google Maps ที่มาพร้อม<br>
                        ฟังก์ชั่นแสดงจุดสนใจ POI (Point of Interest)
                        และสามารถแสดงแผนที่ในรูปแบบ Street View
                        แบบภาพถ่ายดาวเทียม (Satellite) และเหนือกว่าด้วยการแสดงสภาพการจราจร แบบ Realtime
                    </p>
                </li>
                <li>
                    <div class="img-statistic">
                        <img src="assets/images/about/innovative/teletec/statistic-03.jpg">
                    </div>
                    <h2>
                        สะดวกกว่ารวดเร็วกว่า
                    </h2>
                    <p>
                        ด้วยรูปแบบรายงานการขับขีี่ที่เข้าใจง่าย ทั้งแบบราย
                        วันรายสัปดาห์ และแบบรายเดือน หรือตามที่ผู้ใช้งาน
                        ต้องการ โดยสามารถเรียกดูย้อนหลังได้นาน 6 เดือน
                        และนำข้อมูลไปใช้ต่อได้ง่ายโดยเลือก Export ไฟล์เป็น
                        Format ต่างๆ เช่น MS Excel, CSV, PDF หรือสั่ง
                        พิมพ์รายงานจากหน้าจอเว็บไซต์ได้ทันท
                    </p>
                </li>
                <li>
                    <div class="img-statistic">
                        <img src="assets/images/about/innovative/teletec/statistic-04.jpg">
                    </div>
                    <h2>
                        บริหารงานง่ายขึ้น
                    </h2>
                    <p>
                        สามารถกำหนดพื้นที่การเข้าออกพร้อมรู้เวลา
                        เข้า-ออกของรถทุกคันในฟลีทได้
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="bg-gray sec-warranty">
        <div class="container">
            <h1>
                <img src="assets/images/about/innovative/teletec/h-warranty.png">
                มั่นใจ...ดูแลแบบมืออาชีพ
            </h1>
            <ul>
                <li>
                    <img src="assets/images/about/innovative/teletec/warranty-01.jpg">
                    <h2>
                        มั่นใจกว่า
                    </h2>
                    <p>
                        ด้วยการรับประกันนานถึง 4 ปี<sup>*</sup> และการดูแลจากศูนย์บริการมาตรฐานอีซูซุทั่วประเทศ
                        <small>*เงื่อนไขเป็นไปตามบริษัทกำหนด</small>
                    </p>
                </li>
                <li>
                    <img src="assets/images/about/innovative/teletec/warranty-02.jpg">
                    <h2>
                        อุ่นใจกว่า
                    </h2>
                    <p>
                        บริการให้คำปรึกษาดูแลตลอด 24 ชม.
                        TELETEC CALL CENTER 0-2079-9789
                    </p>
                </li>
                <li>
                    <img src="assets/images/about/innovative/teletec/warranty-03.jpg">
                    <h2>
                        มีหลักสูตรอบรม
                    </h2>
                    <p>
                        พร้อมด้วยหลักสูตรอบรมการใช้งานระบบ “เทเลเทค”
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-notice">
        <div class="container">
            <h1>
                <img src="assets/images/about/innovative/teletec/h-notice.png">
                แจ้งเตือนทันที...ปลอดภัยยิ่งกว่า
            </h1>
            <h2>
                แจ้งเตือนแบบ Real Time
            </h2>
            <p>
                ทุกครั้งที่มีการฝ่าฝืน และมีรายงานสรุปการละเมิดตามประกาศของกรมการขนส่งทางบก<br>
                เช่น การขับรถต่อเนื่องนานเกิน 8 ชม./วัน หรือการขับรถต่อเนื่องนานเกิน 4 ชม./ครั้ง เป็นต้น
            </p>
            <ul>
                <li>                    
                    <img src="assets/images/about/innovative/teletec/notice-01.jpg">
                </li>
                <li>                    
                    <img src="assets/images/about/innovative/teletec/notice-02.jpg">
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-saving">
        <div class="container">
            <h1>
                <img src="assets/images/about/innovative/teletec/h-saving.png">
                ช่วยประหยัดน้ำมัน...เพิ่มผลกำไร
            </h1>
            <ul>
                <li>
                    <h2>
                        รู้ลึกกว่า
                    </h2>
                    <p>
                        กับสาเหตุความสิ้นเปลืองน้ำมันต่างๆ จากรายงานพฤติกรรม<br>
                        การขับขี่ เช่น การเร่งเครื่องกะทันหัน การขับรถเร็วเกินกำหนด<br>
                        และระยะทาง หรือระยะเวลาที่ใช้ความเร็วเกินกำหนด
                    </p>
                </li>
                <li>
                    <h2>
                        บริหารเส้นทางดีกว่า
                    </h2>
                    <p>
                        กับเส้นทางที่มีระยะทางสั้นหรือใช้เวลาน้อยกว่า<br>
                        และสามารถหลีกเลี่ยงเส้นทางที่มีการจราจรติดขัด<br>
                        ผ่านฟังก์ชั่น Google Maps
                    </p>
                </li>
            </ul>
            <img src="assets/images/about/innovative/teletec/satellite.png" class="satellite">
            <img src="assets/images/about/innovative/teletec/car-saving.png" class="car">
        </div>
    </section>
    <section class="sec-teletec"></section>
    <section class="sec-option">
        <div class="container">
            <h1>
                อุปกรณ์สั่งพิเศษ
            </h1>
            <p>
                ทางเลือกมากกว่า ด้วยอุปกรณ์เสริมที่หลากหลาย เพื่อเพิ่มประสิทธิภาพ และความมั่นใจในการขนส่ง
            </p>
            <ul>
                <li>
                    <div class="box-img">
                        <img src="assets/images/about/innovative/teletec/option-01.jpg">
                    </div>
                    <h2>
                        เซ็นเซอร์น้ำมัน
                    </h2>
                    <p>
                        (Fuel Sensor) สำหรับวัดระดับน้ำมันที่เหลือในถัง
                    </p>
                </li>
                <li>
                    <div class="box-img">
                        <img src="assets/images/about/innovative/teletec/option-02.jpg">
                    </div>
                    <h2>
                        เซ็นเซอร์ตรวจวัดอุณหภูมิ
                    </h2>
                    <p>
                        (Temperate Sensor) สำหรับวัดอุณหภูมิในตู้ขนสินค้า
                    </p>
                </li>
                <li>
                    <div class="box-img">
                        <img src="assets/images/about/innovative/teletec/option-03.jpg">
                    </div>
                    <h2>
                       กล้องถ่ายภาพนิ่ง 
                    </h2>
                    <p>
                        (Snapshot Camera) ถ่ายภาพทันที เมื่อเกิด
                        เหตุการณ์ผิดปกติตามจุดที่ต้องการตรวจสอบ
                    </p>
                    <h2>
                        กล้องวิดีโอแบบ Real Time
                    </h2>
                    <p>
                        MDVR) ติดตั้งสูงสุดได้ 4 จุด ติดตามเหตุการณ์
                        แบบ Real Time ผ่านเว็บไซต์ และ Mobile Application ได้ตลอดเวลา
                    </p>
                </li>
                <li>
                    <div class="box-img">
                        <img src="assets/images/about/innovative/teletec/option-04.jpg">
                    </div>
                    <h2>
                        บริการข้ามแดน
                    </h2>
                    <p>
                        (Data Roaming) สำหรับติดตามรถที่ขนส่งสินค้า
                        ข้ามแดน (พม่า ลาว กัมพูชา มาเลเซีย และเวียดนาม)
                    </p>
                </li>
            </ul>
        </div>
    </section>
</section>
<div class="container">
    <nav class="web-breadcrumb">
        <h1 class="hide">breadcrumb</h1>
        <ol class="list-unstyled">
            <li><a href="#">หน้าหลัก</a></li>
            <li><a href="#">เกี่ยวกับอีซูซุ</a></li>
            <li><a href="#">นวัตกรรมและเทคโนโลยี</a></li>
        </ol>
    </nav>
</div>


<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>

</body>

</html>




































