<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/innovative.css">
    <style>

    </style>


</head>

<body class="header-small">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<!--Margin between content to footer and content to header-->
<section class="margin-main-content page-iesc">

    <!--Sub header-->
    <div class="sub-header-wrapper">
        <div class="container">
            <!--Sub header normal page -->
            <div class="sub-header / clearfix">
                <h1 class="sub-header__header / font-size-h3">ระบบควบคุมการทรงตัวอัจฉริยะ IESC</h1>
            </div>
        </div>
    </div>
    <section class="hightlight"></section>
    <section class="detail">
        <div class="container">
            <img src="assets/images/about/innovative/iesc/logo-iesc.png">
            <h1>
                ใหม่! ครั้งแรกของระบบควบคุมการทรงตัวอัจฉริยะ IESC<br>
                (Isuzu Electronic Stability Control)
            </h1>
            <p>
                ในรุ่น FVM 240 IESC ช่วยเพิ่มเสถียรภาพ และควบคุมการทรงตัวในขณะขับขี่โดยอัตโนมัติ<br>ด้วยระบบอิเล็กทรอนิกส์ โดยการจับเซ็นเซอร์จากการหมุนของล้อ<br>
                องศาการหมุนของพวงมาลัย และแรงเหวี่ยงของรถ ซึ่งเกิดจากการทำงานร่วมกัน 4 ระบบ คือ
            </p>
        </div>
    </section>
    <section class="ars">
        <div class="container">
            <h1>
                <span>ระบบป้องกันการลื่นไถลขณะออกตัวหรือเร่งความเร็ว ASR</span>
                (Anti-slip Regulator)
            </h1>
            <p>
                ช่วยเพิ่มการทรงตัวของรถในสภาพถนนลื่น หรือเป็นหล่มโคลน
            </p>
            <ul class="list">
                <li>
                    <img src="assets/images/about/innovative/iesc/mini-car-gray.png">
                    <p>
                        มีระบบ IESC
                    </p>
                </li>
                <li>
                    <img src="assets/images/about/innovative/iesc/mini-car-red.png">
                    <p>
                        ไม่มีระบบ IESC
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="esc">
        <div class="container">
            <h1>
                <span>
                    ระบบป้องกันการพลิกคว่ำและลื่นไถลขณะเข้าโค้ง ESC
                </span>
                (Electronic Stability Control)
            </h1>
            <p>
                ระบบสั่งการควบคุมการเบรกของแต่ละล้อให้เหมาะสม<br>และควบคุมการทำงานของเครื่องยนต์โดยอัตโนมัติเมื่อรถสูญเสียการทรงตัว
            </p>
            <ul class="list">
                <li>
                    <img src="assets/images/about/innovative/iesc/mini-car-gray.png">
                    <p>
                        มีระบบ IESC
                    </p>
                </li>
                <li>
                    <img src="assets/images/about/innovative/iesc/mini-car-red.png">
                    <p>
                        ไม่มีระบบ IESC
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="abs">
        <div class="container">
            <h1>
                <span>
                    ระบบป้องกันล้อล็อกขณะเบรก ABS
                </span>
                (Anti-lock Brake System)
            </h1>
            <p>
                ขณะเบรกกะทันหัน หากล้อมีอาการล็อก และสูญเสียการควบคุม ระบบจะทำการควบคุมการเบรก<br>
                เพื่อป้องกันไม่ให้เกิดการล็อกของล้อโดยอัตโนมัติ<br>
                เพื่อให้สามารถควบคุมรถได้อย่างมีประสิทธิภาพ
            </p>
            <ul class="list">
                <li>
                    <img src="assets/images/about/innovative/iesc/mini-car-gray.png">
                    <p>
                        มีระบบ IESC
                    </p>
                </li>
                <li>
                    <img src="assets/images/about/innovative/iesc/mini-car-red.png">
                    <p>
                        ไม่มีระบบ IESC
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="ebs">
        <div class="container">
            <h1>
                <span>
                    ระบบเบรกอิเล็กทรอนิกส์ EBS
                </span>
                (Electronic Brake System)
            </h1>
            <p>
                เป็นระบบที่ใช้ไฟฟ้าเป็นตัวส่งสัญญาณเบรก ซึ่งมีประสิทธิภาพในการตอบสนองที่รวดเร็ว<br>
                ช่วยให้สามารถเบรกได้อย่างมั่นใจ
            </p>
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
<script src="<?php echo $root_path; ?>/assets/js/wow.min.js"></script>
<script type="text/javascript">      
    $(document).ready(function () {
        $(".vdo a").on('click', function() {
            console.log("click");
            $(this).fadeOut();
            $(".box-vdo").html('<iframe width="560" height="315" src="https://www.youtube.com/embed/yOTYOaRmPHU?autoplay=1&controls=0&loop=1&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
        });
    });
</script>

</body>

</html>




































