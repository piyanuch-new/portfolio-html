<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <!-- style for product detail page -->
    <link rel="stylesheet" href="product-detail/assets/css/product-detail.css">

    <!-- make website color with theme -->
    <link rel="stylesheet" href="product-detail/assets/css/theme/v-cross.css">
</head>

<body class="color-content">

<!-- menu -->
<?php include_once( 'web-header.php' ); ?>


<!-- Content -->
<main>
    <section>
        <div class="container">
            <h1>Head</h1>
            <p>
                ตอกย้ำความเป็นผู้นำด้านยนตรกรรมที่แข็งแกร่งและประหยัดน้ำมันใน “คาราวาน “อีซูซุ 1.9 ดีดีไอ บลูเพาเวอร์”
                พิสูจน์ความแกร่ง ประหยัด 6,128 กม. วิ่งทั้งวันทั้งคืนไม่ดับเครื่องยนต์” เส้นทางปักกิ่ง (กำแพงเมืองจีน) –
                ออร์โดส – ซีอาน ภาคต่อของบททดสอบสมรรถนะความทนทานของเครื่องยนต์ “อีซูซุ 1.9 ดีดีไอ บลูเพาเวอร์”
                ครั้งแรกของโลกที่จัดขึ้นเมื่อปลายปี พ.ศ. 2558 ที่สุดแห่งแนวคิดการทดสอบ สุดหฤโหดที่ไม่มีใครกล้าทำมาก่อน
                คือ
                วิ่งต่อเนื่อง ทั้งวัน! ทั้งคืน! โดยไม่ดับเครื่องยนต์ผ่าน 3 ประเทศ ไทย ลาว และสิ้นสุด ณ เมืองอุรุมชี
                (Urumqi)
                เขตปกครองตนเองซินเจียง (Xingjiang) ประเทศจีน บนเส้นทาง อันแสนโหด ระยะทาง 5,755 กิโลเมตร
                สำหรับภารกิจครั้งล่าสุดนี้เพื่อสร้างสถิติใหม่ด้านความทนทานของยอดเครื่องยนต์ประหยัดน้ำมันอีซูซุ 1.9
                ดีดีไอ
                บลูเพาเวอร์ ด้วยเส้นทางที่ยาวที่สุดกว่าครั้งก่อนถึง 6,128 กม. ด้วยเวลาเพียง 80 ชั่วโมง
                โดยไม่ดับเครื่องยนต์
                ท้าพิสูจน์ความทนทานทุกสภาพภูมิอากาศและภูมิประเทศ
            </p>


        </div>

    </section>

    <div class="container">

        <div class="product-thumb-area">

            <h1 class="product-thumb-area__header / font-size-h2 / color-content">ระบบส่งกำลัง <span>ขับสนุก ต้นจัด ปลายแรง ส่งถ่ายกำลังได้เต็มประสิทธิภาพ</span></h1>

            <div class="row">
				<?php for ( $i = 0; $i < 3; $i ++ ) { ?>
                    <div class="col-md-4">

                        <section class="product-thumb">
                            <div class="product-thumb__image">
                                <img class="img-responsive" src="assets/images/_temp/418x260.png" alt="product image">
                            </div>
                            <div class="product-text-block">
                                <h1 class="product-text-block__header">
                    <span class="product-text-block__header-top / font-size-h4 / color-content">
                        เกียร์ออโตเมติก 6 สปีด
                    </span>


                                </h1>
                                <p class="product-text-block__content">วี-ครอส MAX 4X4 เปลี่ยนลุคใหม่
                                    สู่…ขีดสุดแห่งความดุดัน <br>
                                    แกร่งทุกองศา ทรงพลังจากภายนอกจรดภายใน <br>
                                    สไตล์ออฟโรดพันธุ์แท้</p>


                            </div>
                        </section>

                    </div>
				<?php } ?>
            </div>

        </div>


    </div>

</main>

<!-- Footer -->
<?php include_once( 'web-footer.php' ); ?>


</body>

</html>