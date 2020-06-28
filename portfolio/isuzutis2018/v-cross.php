<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/product.css">
</head>

<body>

<!-- menu -->
<?php include_once( 'web-header.php' ); ?>



<!-- Content -->
<main class="theme-dark">
    <!-- sub menu -->
    <?php include_once( 'web-sub-header-product.php' ); ?>

    <section class="sec-color">    
        <div class="container">
            <div class="wrap-car">
                <img src="assets/images/product/v-cross/car-v-cross-max4x4.png">
            </div>
            <div class="color-slide">
                <h1><span>ใหม่!</span> แดงเอทนา Etna Red</h1>
                <ul>
                    <li class="active" data-car="v-cross-max4x4">
                        <h1>รุ่น V-CROSS MAX 4X4</h1>
                        <ul>
                            <li>
                                <a data-color="red"><img src="assets/images/product/v-cross/color-red.png"></a>
                            </li>
                            <li>
                                <a data-color="black"><img src="assets/images/product/v-cross/color-black.png"></a>
                            </li>
                            <li>
                                <a data-color="pearl"><img src="assets/images/product/v-cross/color-pearl.png"></a>
                            </li>
                            <li>
                                <a data-color="silver"><img src="assets/images/product/v-cross/color-silver.png"></a>
                            </li>
                        </ul>
                    </li>
                    <li data-car="v-cross-4x4-4door">
                        <h1>รุ่น V-CROSS 4X4 แบบ 4 ประตู</h1>
                        <ul>
                            <li>
                                <a data-color="red"><img src="assets/images/product/v-cross/color-red.png"></a>
                            </li>
                        </ul>
                    </li>
                    <li data-car="v-cross-4x4-2door">
                        <h1>รุ่น V-CROSS 4X4 แบบ 2 ประตู</h1>
                        <ul>
                            <li>
                                <a data-color="red"><img src="assets/images/product/v-cross/color-red.png"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--section indoor-->
    <section class="sec-indoor">
        <div class="indoor">
            <img class="img-responsive" src="assets/images/product/v-cross/indoor.jpg" alt="">
        </div>   
        <div class="container">            
            <ul class="indoor-slide">
                <li>
                    <img src="assets/images/product/v-cross/indoor-01.jpg">
                </li>
                <li>
                    <img src="assets/images/product/v-cross/indoor-02.jpg">
                </li>
                <li>
                    <img src="assets/images/product/v-cross/indoor-03.jpg">
                </li>
                <li>
                    <img src="assets/images/product/v-cross/indoor-04.jpg">
                </li>
                <li>
                    <img src="assets/images/product/v-cross/indoor-02.jpg">
                </li>
            </ul>
        </div>
    </section>

</main>

<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>
<script src="assets/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {          
        $(".indoor-slide").each(function(){
            var owl = $(this),
                li = owl.find("li"),
                length = li.length;
            if (length > 4) {
                owl.owlCarousel({
                    loop: true,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3500,
                    smartSpeed: 500,                    
                    navText: [" "," "],
                    responsive : {
                        0 : {
                            items: 1,
                            margin: 10,
                        },
                        360 : {
                            items: 2,
                            margin: 10,
                        },
                        480 : {
                            items: 3,
                            margin: 15,
                        },
                        768 : {
                            items: 4,
                            margin: 20,
                        }
                    }
                }); 
            } 
        });
        $("li[data-car]").each(function(){
            var wrapImg = $(".wrap-car"),
                dataImg = $(this).attr("data-car");

            $(this).click(function(){
                console.log(dataImg);
                wrapImg.html("<img src='assets/images/product/v-cross/car-"+dataImg+".png'>")
                $("li[data-car]").removeClass("active");
                $(this).addClass("active");
            })
        });
        $(".color-slide > ul").each(function(){
            var owlColor = $(this),
                liColor = owlColor.find("[data-car]"),
                lengthColor = liColor.length;
            if (lengthColor > 4) {
                owlColor.owlCarousel({
                    loop: true,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3500,
                    smartSpeed: 500,                    
                    navText: [" "," "],
                    responsive : {
                        0 : {
                            items: 1,
                            margin: 10,
                        },
                        360 : {
                            items: 2,
                            margin: 10,
                        },
                        480 : {
                            items: 3,
                            margin: 15,
                        },
                        768 : {
                            items: 4,
                            margin: 20,
                        }
                    }
                }); 
            } 
        });
    })
</script>

</body>

</html>