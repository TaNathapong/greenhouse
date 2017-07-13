<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('Manage_product/edit_product_page', $attr);?>

<div class="single-product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">สินค้าที่เคยลง</h2>
                    <ul>
                        <li><a href="" class="text-center" ><img src="<?php echo base_url('img/Dark-Green.jpeg');?>" width="100px" height="100px"><br>ผักสลัดกรีนโอ๊ค</a></li>
                        <li><a href="" class="text-center" ><img src="<?php echo base_url('img/bell_chilli.jpg');?>" width="100px" height="100px"><br>พริกหวาน</a></li>
                        <li><a href="" class="text-center" ><img src="<?php echo base_url('img/broccoli.jpg');?>" width="100px" height="100px"><br>บล็อคโคลี่</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10">
                <div class="product-content-right">
                    <div class="product-breadcroumb text-right">
                        <a href="<?php echo site_url('index.php');?>">หน้าแรก</a>
                        <a href="<?php echo site_url('shop.php');?>">ผัก</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="w3-content" style="max-width:1200px">
                                <img class="mySlides" src="<?php echo base_url('img/IMG_0031.jpg');?>" style="width:100%">
                                <img class="mySlides" src="<?php echo base_url('img/815723638.jpg');?>"style="width:100%">
                                <img class="mySlides" src="<?php echo base_url('img/image00415.jpg');?>" style="width:100%">

                                <div class="w3-row-padding w3-section">
                                    <div class="w3-col s3">
                                        <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/IMG_0031.jpg');?>" style="width:100%" onclick="currentDiv(1)">
                                    </div>
                                    <div class="w3-col s3">
                                        <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/815723638.jpg');?>" style="width:100%" onclick="currentDiv(2)">
                                    </div>
                                    <div class="w3-col s3">
                                        <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/image00415.jpg');?>" style="width:100%" onclick="currentDiv(3)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner ">
                                <div class="form-group">
                                    <label for="sel1">หมวดหมู่สินค้า:</label>
                                    <select class="form-control" id="sel1">
                                        <option>ผักออแกรนิค</option>
                                        <option>ผักปลอดสารพิษ</option>
                                        <option>ผักไฮโดรโปนิค</option>
                                        <option>ผลไม้</option>
                                    </select>
                                </div><br>
                                <div class="row">
                                    <form action="/action_page.php">
                                        <div class="col-sm-3">ชื่อสินค้า :</div>
                                        <div class="col-sm-9"><input class="form-control input-sm" type="text" name="productname" style="margin-bottom:5px;"></div><br>
                                        <div class="col-sm-3">ชื่อลิงค์ :</div>
                                        <div class="col-sm-9"><input class="form-control input-sm" type="text" name="linkname"  style="margin-bottom:5px;"></div><br>
                                    </form>
                                </div><br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline"><input type="checkbox" value="1">แสดงในหน้าเว็บ</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline"><input type="checkbox" value="1">โปรโมต</label>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-sm-2">ราคา:</div>
                                    <div class="col-sm-3"><input class="form-control input-sm" type="text" name="productname"  style="margin-bottom:5px;" ></div>
                                    <div class="col-sm-2">บาท/</div>
                                    <div class="col-sm-3"><input class="form-control input-sm" type="text" name="linkname"  style="margin-bottom:5px;"></div>
                                    <div class="col-sm-2">หน่วย</div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="comment">รายละเอียด:</label>
                                        <textarea class="form-control" rows="5" id="detail"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <form action="/action_page.php">
                                        <div class="col-sm-3">สถานที่ขาย :</div>
                                        <div class="col-sm-9"  style="margin-bottom:5px;">
                                            <select name="province">
                                                <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                <option value="กระบี่">กระบี่ </option>
                                                <option value="กาญจนบุรี">กาญจนบุรี </option>
                                                <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                                <option value="กำแพงเพชร">กำแพงเพชร </option>
                                                <option value="ขอนแก่น">ขอนแก่น</option>
                                                <option value="จันทบุรี">จันทบุรี</option>
                                                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                                <option value="ชัยนาท">ชัยนาท </option>
                                                <option value="ชัยภูมิ">ชัยภูมิ </option>
                                                <option value="ชุมพร">ชุมพร </option>
                                                <option value="ชลบุรี">ชลบุรี </option>
                                                <option value="เชียงใหม่">เชียงใหม่ </option>
                                                <option value="เชียงราย">เชียงราย </option>
                                                <option value="ตรัง">ตรัง </option>
                                                <option value="ตราด">ตราด </option>
                                                <option value="ตาก">ตาก </option>
                                                <option value="นครนายก">นครนายก </option>
                                                <option value="นครปฐม">นครปฐม </option>
                                                <option value="นครพนม">นครพนม </option>
                                                <option value="นครราชสีมา">นครราชสีมา </option>
                                                <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                                <option value="นครสวรรค์">นครสวรรค์ </option>
                                                <option value="นราธิวาส">นราธิวาส </option>
                                                <option value="น่าน">น่าน </option>
                                                <option value="นนทบุรี">นนทบุรี </option>
                                                <option value="บึงกาฬ">บึงกาฬ</option>
                                                <option value="บุรีรัมย์">บุรีรัมย์</option>
                                                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                                <option value="ปทุมธานี">ปทุมธานี </option>
                                                <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                                <option value="ปัตตานี">ปัตตานี </option>
                                                <option value="พะเยา">พะเยา </option>
                                                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                                <option value="พังงา">พังงา </option>
                                                <option value="พิจิตร">พิจิตร </option>
                                                <option value="พิษณุโลก">พิษณุโลก </option>
                                                <option value="เพชรบุรี">เพชรบุรี </option>
                                                <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                                <option value="แพร่">แพร่ </option>
                                                <option value="พัทลุง">พัทลุง </option>
                                                <option value="ภูเก็ต">ภูเก็ต </option>
                                                <option value="มหาสารคาม">มหาสารคาม </option>
                                                <option value="มุกดาหาร">มุกดาหาร </option>
                                                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                                <option value="ยโสธร">ยโสธร </option>
                                                <option value="ยะลา">ยะลา </option>
                                                <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                                <option value="ระนอง">ระนอง </option>
                                                <option value="ระยอง">ระยอง </option>
                                                <option value="ราชบุรี">ราชบุรี</option>
                                                <option value="ลพบุรี">ลพบุรี </option>
                                                <option value="ลำปาง">ลำปาง </option>
                                                <option value="ลำพูน">ลำพูน </option>
                                                <option value="เลย">เลย </option>
                                                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                                <option value="สกลนคร">สกลนคร</option>
                                                <option value="สงขลา">สงขลา </option>
                                                <option value="สมุทรสาคร">สมุทรสาคร </option>
                                                <option value="สมุทรปราการ">สมุทรปราการ </option>
                                                <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                                <option value="สระแก้ว">สระแก้ว </option>
                                                <option value="สระบุรี">สระบุรี </option>
                                                <option value="สิงห์บุรี">สิงห์บุรี </option>
                                                <option value="สุโขทัย">สุโขทัย </option>
                                                <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                                <option value="สุรินทร์">สุรินทร์ </option>
                                                <option value="สตูล">สตูล </option>
                                                <option value="หนองคาย">หนองคาย </option>
                                                <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                                <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                                <option value="อุดรธานี">อุดรธานี </option>
                                                <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                                <option value="อุทัยธานี">อุทัยธานี </option>
                                                <option value="อุบลราชธานี">อุบลราชธานี</option>
                                                <option value="อ่างทอง">อ่างทอง </option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div><br>
                                        <div class="col-sm-3">ติดแท็ก:</div>
                                        <div class="col-sm-9"><input class="form-control input-sm" type="text" name="linkname"  style="margin-bottom:5px;"></div><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">มาตรฐานที่ได้รับ</h2>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">GAP</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">GMP</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">IFOAM</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">Halal</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">Organic Thailand</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">Q</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">อย.</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">Q Premium</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">HACCP</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">BRC</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">ISO 22000</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">ISO 22000: 2005</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">PSG Organic</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="checkbox-inline"><input type="checkbox" value="1">อื่นๆ</label>
                            </div>
                        </div><br>
                        <div class="text-center"><a href="show-products-seller.html" class="btn btn-success btn-lg">SAVE</a></div>
                    </div>

                </div><br><br>
            </div>
        </div>
    </div>
</div>
