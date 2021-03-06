<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('Manage_product/set_auc_profile_page', $attr);?>

<div class="single-product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
                                <span class="btn btn-default btn-file m-r-5">
                                    <span class="fileinput-new">
                                        <img src="<?php echo base_url ('dist/icon/addButton1.png');?>" width="50%" alt="">
                                    </span>
                                    <span class="fileinput-exists">
                                    </span>
                                    <input type="file" name="product_pic">
                                </span>
                                <span class="fileinput-filename">
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner ">
                                <div class="form-group">
                                    <label for="sel1">หมวดหมู่สินค้า:</label>
                                    <select class="form-control" name="product_type"  id="sel1">
                                        <option>สินค้าประมูล</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <form action="/action_page.php">
                                        <div class="col-sm-3">ชื่อสินค้า :</div>
                                        <div class="col-sm-9"><input class="form-control input-sm" type="text" name="product_name" style="margin-bottom: 5px;"></div><br>
                                        <div class="col-sm-3">เวลาในการประมูล :</div>
                                        <div class="col-sm-3"><input class="form-control input-sm" type="text" name="product_auc_count" style="margin-bottom: 5px;"></div>
                                        <div class="col-sm-1">ชั่วโมง</div>
                                        <div class="col-sm-3"><input class="form-control input-sm" type="text" name="product_auc_count" style="margin-bottom: 5px;"></div>
                                        <div class="col-sm-1">นาที</div><br>
                                    </form>
                                </div><br>

                                <div class="row">
                                    <div class="col-sm-3">ราคาประมูลเริ่มต้น :</div>
                                    <div class="col-sm-7"><input class="form-control input-sm" type="text" name="product_auc_cost" style="margin-bottom: 5px;"></div>
                                    <div class="col-sm-2">บาท</div>
                                </div>
                                <div class="row" style="padding:10px">
                                    <div class="form-group">
                                        <label for="comment">รายละเอียด:</label>
                                        <textarea class="form-control" rows="5" id="detail" name="product_detail" style="margin-bottom: 5px;"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <form action="/action_page.php">
                                        <div class="col-sm-3">สถานที่ขาย :</div>
                                        <div class="col-sm-9" style="margin-bottom: 5px;">
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
                                        <div class="col-sm-9"><input class="form-control input-sm" type="text" name="linkname" style="margin-bottom: 5px;"></div><br>

                                    </form>
                                </div><br>

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
                        <div class="text-center"><button class="btn btn-success btn-lg" type="submit">บันทึก</a></div>
                    </div>

                </div><br><br>
            </div>
        </div>
    </div>
</div>
<?php echo form_close();?>
