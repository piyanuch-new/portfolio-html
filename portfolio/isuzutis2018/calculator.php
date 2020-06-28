<!DOCTYPE html>
<html dir="ltr" lang="TH">

<head>
	<?php include_once( 'web-data.php' ); ?>

    <link rel="stylesheet" href="assets/css/calculator.css">
    <style>

    </style>


</head>

<body class="header-small body-top">

<!-- if you want small menu add .header-small to body tag -->

<!-- website menu -->
<?php include_once( 'web-header.php' ); ?>

<div class="header-banner" style="background-image: url(assets/images/calculator/bg.jpg);">
    <div class="header-banner__text">
        <h1>
            คำนวณค่างวด
        </h1>
        <p>เพียงเลือกรถที่สนใจ และลองคำนวณค่างวดที่ต้องจ่าย</p>
    </div>
</div>

<div class="container">
    <div class="form-padding">
        <form action="#">

            <!--field 1-->
            <div class="form-section">
                <fieldset>
                    <legend>
                        กรุณาเลือกรถ

                    </legend>
                    <!--row 1-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label>
                                        เลือกประเภทรถ
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <select>
                                        <option>รถปิกอัพ</option>
                                        <option>รถปิกอัพ</option>
                                        <option>รถปิกอัพ</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label>
                                        เลือกรถ


                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <select>
                                        <option>อีซูซุ วี-ครอส</option>
                                        <option>อีซูซุ วี-ครอส</option>
                                        <option>อีซูซุ วี-ครอส</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--row 2-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label>
                                        เลือกรุ่นรถ

                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <select>
                                        <option>แบบ 4 ประตู 3.0 Ddi V-Cross Max 4x4 A/T</option>
                                        <option>แบบ 4 ประตู 3.0 Ddi V-Cross Max 4x4 A/T</option>
                                        <option>แบบ 4 ประตู 3.0 Ddi V-Cross Max 4x4 A/T</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label>
                                        เลือกสีรถ

                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <select>
                                        <option>ขาวมุกเอเวอเรสต์</option>
                                        <option>ขาวมุกเอเวอเรสต์</option>
                                        <option>ขาวมุกเอเวอเรสต์</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                </fieldset>
            </div>


            <div id="formCalculatorSection2">
                <!--field 2-->
                <div class="form-section">
                    <fieldset>
                        <legend>
                            กรุณาระบุรายละเอียด

                        </legend>
                        <!--row 1-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>
                                            เงินดาวน์ (%) <strong>*</strong>
                                        </label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="text" value="20">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>
                                            อัตราดอกเบี้ย (%) <strong>*</strong>
                                        </label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="text" value="3">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--row 2-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>
                                            จำนวนเงิน (บาท) <strong>*</strong>
                                        </label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="text" value="219,800">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>
                                            ระยะเวลาผ่อนชำระ <strong>*</strong>
                                        </label>
                                    </div>
                                    <div class="col-xs-8">
                                        <select>
                                            <option>12</option>
                                            <option>24</option>
                                            <option>60</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </div>


                <!--button submit-->
                <div class="form-button-wrapper">
                    <button id="buttonCalculator" type="submit">คำนวณค่างวด</button>
                </div>
            </div>
        </form>

        <div id="formCalculatorResult" style="display: none;">
            <!--result-->
            <div class="form-section">
                <h1 class="form-header">
                    ผลการคำนวณ


                </h1>

                <!--result list -->
                <div class="row">
                    <div class="col-sm-5">
                        <img class="img-responsive" src="assets/images/compare/4x2-1.9-DVD-AT.png" alt="">
                    </div>
                    <div class="col-sm-7">
                        <div class="calculator-result-list">
                            <dl>
                                <div>
                                    <dt>รถ</dt>
                                    <dd>ปิกอัพ อีซูซุ วี-ครอส
                                    </dd>
                                </div>
                                <div>
                                    <dt>รุ่น</dt>
                                    <dd>แบบ 4 ประตู 3.0 Ddi V-Cross MAX 4x4 A/T</dd>
                                </div>
                                <div>
                                    <dt>ราคา</dt>
                                    <dd>1,099,000 บาท</dd>
                                </div>
                                <div>
                                    <dt>เงินดาวน์</dt>
                                    <dd>20 % หรือ 219,800 บาท
                                    </dd>
                                </div>
                                <div>
                                    <dt>อัตราดอกเบี้ย</dt>
                                    <dd>3 %</dd>
                                </div>
                                <div>
                                    <dt>ระยะเวลาผ่อนชำระ</dt>
                                    <dd>12 เดือน</dd>
                                </div>
                                <div>
                                    <dt>ยอดจัดสินเชื่อ</dt>
                                    <dd>879,200</dd>
                                </div>
                            </dl>
                        </div>


                    </div>
                </div>


            </div>

            <!--result footer -->
            <div class="calculator-result-footer">
                <div class="row">
                    <div class="col-sm-9">
                        <p class="row">
                            <span class="col-sm-6">ผลการคำนวณค่างวดต่อเดือน</span>
                            <strong class="col-sm-6 / font-size-h2">
                                75,465 <span class="font-size-small">บาท</span>
                            </strong>
                        </p>
                    </div>

                    <div class="col-sm-3">
                        <a id="buttonReCalculator" class="form-button">คำนวณใหม่</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <!--form calculator-->

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
    'use strict';

    document.addEventListener('DOMContentLoaded', function(){

        /**
         *
         * Function for open or close between form input and result box
         *
         */
        (function toggleCalculatorForm(){
            var formCalculatorSection2 = document.getElementById('formCalculatorSection2'),
                formCalculatorResult = document.getElementById('formCalculatorResult'),
                buttonCalculator = document.getElementById('buttonCalculator'),
                buttonReCalculator = document.getElementById('buttonReCalculator');

            formCalculatorResult.style.display = 'none';

            buttonCalculator.addEventListener('click', function(e){
                e.preventDefault();

                formCalculatorSection2.style.display = 'none';
                formCalculatorResult.style.display = 'block';
            });

            buttonReCalculator.addEventListener('click', function(e){
                e.preventDefault();

                formCalculatorSection2.style.display = 'block';
                formCalculatorResult.style.display = 'none';
            });
        })();
    });

</script>

</body>

</html>