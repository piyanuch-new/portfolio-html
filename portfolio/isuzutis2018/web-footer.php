<!-- website footer -->
<footer class="main-footer">

    <div class="container">
        <section class="footer-top / clearfix">
            <!--Search-->
            <div class="footer-top__layout">
                <h1 class="footer-top__header">ค้นหาผู้จำหน่าย หรือศูนย์บริการอีซูซุ ใกล้บ้านท่าน</h1>
                <div class="footer-search">

                    <form action="#">
                        <input type="text" placeholder="เลือกจังหวัด">
                        <button type="submit">ค้นหา</button>
                    </form>
                </div>
            </div>

            <!-- Social -->
            <div class="footer-top__layout">
                <h1 class="footer-top__header">ติดตามความเคลื่อนไหวอีซูซุได้ทุกช่องทาง</h1>
                <div class="footer-social">

                    <ul class="list-unstyled">
                        <li class="social__fb">
                            <div class="link-fb">
                                <img src="<?php echo $root_path; ?>/assets/images/footer-social-fb.png" alt="icon facebook">
                                <span class="hide">facebook isuzu official</span>
                                <div class="list-fb">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="https://www.facebook.com/ALLNEWISUZUDMAX/" target="_blank">
                                                <img src="<?php echo $root_path; ?>/assets/images/header/logo-dmax.png">
                                                Isuzu D-max
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/isuzumuxthailand/" target="_blank">
                                                <img src="<?php echo $root_path; ?>/assets/images/header/logo-mux.png">
                                                Isuzu MU-X
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/IsuzuTrucksThailandOfficial/" target="_blank">
                                                <img src="<?php echo $root_path; ?>/assets/images/header/logo-truck.png">
                                                Isuzu Trucks
                                            </a>
                                        </li>
                                    </ul>    
                                </div>
                            </div>
                        </li>
                        <!-- <li class="social__ig">
                            <a href="#">
                                <img src="<?php echo $root_path; ?>/assets/images/footer-social-ig.png" alt="icon instagram">
                                <span class="hide">instagram isuzu official</span>
                            </a>
                        </li> -->
                        <li class="social__line">
                            <a href="#">
                                <img src="<?php echo $root_path; ?>/assets/images/footer-social-line.png" alt="icon line">
                                <span class="hide">line isuzu official</span>
                            </a>
                        </li>
                        <li class="social__yt">
                            <a href="#">
                                <img src="<?php echo $root_path; ?>/assets/images/footer-social-yt.png" alt="icon youtube">
                                <span class="hide">youtube isuzu official</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Tell-->
            <div class="footer-top__layout">
                <h1 class="footer-top__header">บริการข้อมูลอัตโนมัติ 24 ชั่วโมง</h1>
                <div class="footer-tell">

                    <p><a href="tel:021118077">02118077</a></p>
                </div>
            </div>


        </section>

        <section id="footerMenu" class="footer-menu">
			<?php
			function echoMenuPattern( &$arr ) {
				?>
                <div class="footer-menu-list">
                    <h1 class="footer-menu__header / jsFooterMenuButton"><a href="#"><?php echo $arr['head']; ?></a>
                    </h1>
                    <ul>
						<?php
						foreach ( $arr['menu'] as $k => $v ) {

							?>
                            <li><a href="#"><?php echo $v; ?></a></li>
							<?php
						}
						?>
                    </ul>
                </div>
				<?php
			}

			?>
            <div class="footer-menu__layout">
                <div class="footer-menu__group  footer-menu__group-1">

					<?php
					$menu = array(
						'head' => 'อีซูซุมิว-เอ็กซ์ วี.ไอ.พี. คลับ',
						'menu' => array(
							'อีซูซุมิว-เอ็กซ์',
							'อีซูซุดีแมคซ์ เอ็กซ์-ซีรี่ส์',
							'อีซูซุดีแมคซ์ วี-ครอส',
							'อีซูซุดีแมคซ์ 4 ประตู',
							'อีซูซุดีแมคซ์ 2 ประตู',
							'อีซูซุดีแมคซ์ สปาร์ค',
							'รถบรรทุกอีซูซุ',
						),
					);

					echoMenuPattern( $menu );
					?>

                </div>
                <div class="footer-menu__group  footer-menu__group-2">
					<?php
					$menu = array(
						'head' => 'บริการ',
						'menu' => array(
							'บริการหลังการขาย',
							'อีซูซุลิสซิ่ง',
							'ตรีเพชรอินชัวรันส์เซอร์วิส',
						),
					);

					echoMenuPattern( $menu );
					?>

					<?php
					$menu = array(
						'head' => 'ข้อเสนอพิเศษ',
						'menu' => array(
							'แคมเพจ์น',
							'อีซูซุมิว-เอ็กซ์ วี.ไอ.พี. คลับ',
							'อีซูซุเอ็กซ์เซลเลนซี่คลับ',
						),
					);

					echoMenuPattern( $menu );
					?>

                </div>
                <div class="footer-menu__group  footer-menu__group-3">
					<?php
					$menu = array(
						'head' => 'อีซูซุอัปเดต',
						'menu' => array(
							'ข่าวสารและกิจกรรมอีซูซุ',
							'เรื่องน่ารู้กับอีซูซุ',
							'วิดีโอ',
							'E-Magazine',
						),
					);

					echoMenuPattern( $menu );
					?>
                </div>
                <div class="footer-menu__group  footer-menu__group-4">
					<?php
					$menu = array(
						'head' => 'ติดต่ออีซูซุ',
						'menu' => array(
							'ติดต่อตรีเพชรอีซูซุ',
							'สมัครงาน',
							'ผู้จำหน่ายอีซูซุ',
						),

					);

					echoMenuPattern( $menu );
					?><?php
					$menu = array(
						'head' => 'เกี่ยวกับอีซูซุ',
						'menu' => array(
							'ประวัติอีซูซุ',
							'นวัตกรรมและเทคโนโลยี',
						),
					);

					echoMenuPattern( $menu );
					?>
                </div>
                <div class="footer-menu__group  footer-menu__group-5">
                    <div class="footer-menu-other">
                        <ul class="list-unstyled">
                            <li><a href="">เปรียบเทียบรุ่นรถ</a></li>
                            <li><a href="calculator.php">คำนวณค่างวด</a></li>
                            <li><a href="">ดาวน์โหลดโบรชัวร์</a></li>
                            <li><a href="test-drive.php">ทดลองขับ</a></li>
                            <li><a href="">ผู้จำหน่ายอีซูซุ</a></li>
                        </ul>
                    </div>
                </div>


            </div>


        </section>
        <div class="footer-bottom">
            <p>สงวนลิขสิทธิ์ © 2018 บริษัท ตรีเพชรอีซูซุเซลส์ จำกัด</p>
            <ul>
                <li><a href="">แผนผังเว็บไซต์</a></li>
                <li><a href="">ข้อกำหนดและเงื่อนไข</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo $root_path; ?>/assets/js/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo $root_path; ?>/assets/js/bootstrap.min.js"></script>

<!-- can use classList on ie 9 -->

<!--[if lte IE 9]>
<script src="<?php echo $root_path; ?>/assets/js/classList.min.js"></script>
<![endif]-->

<!--Owl Carousel-->
<script src="<?php echo $root_path; ?>/assets/js/owl.carousel.min.js"></script>


<script src="<?php echo $root_path; ?>/assets/js/web-control-header.js"></script>
<script src="<?php echo $root_path; ?>/assets/js/web-control-footer.js"></script>
<script src="<?php echo $root_path; ?>/assets/js/web-script.js"></script>

<script>

</script>