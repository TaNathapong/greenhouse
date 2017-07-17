<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('Manage_product/set_product_profile_page', $attr);?>

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
                                    <select class="form-control" name="product_type" id="sel1">
                                        <option>ผัก</option>
                                        <option>ผลไม้</option>
                                        <option>สินค้าแปรรูป</option>
                                        <option>สินค้าพรีเมี่นม</option>
                                        <option>OTOP</option>
                                        <option>อุปกรณ์ทางการเกษตร</option>
                                    </select>
                                </div><br>
                                <div class="row">
                                    <form action="/action_page.php">
                                        <div class="col-sm-3">ชื่อสินค้า :</div>
                                        <div class="col-sm-9">
                                            <input class="form-control input-sm" id="focusedInput" type="text" name="product_name" style="margin-bottom:5px;">
                                        </div><br>
                                        <div class="col-sm-3">ชื่อลิงค์ :</div>
                                        <div class="col-sm-9">
                                            <input class="form-control input-sm" id="focusedInput" type="text" name="product_link"  style="margin-bottom:5px;">
                                        </div><br>
                                    </form>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-2">ราคา:</div>
                                    <div class="col-sm-3"><input class="form-control input-sm" type="text" name="product_price"  style="margin-bottom:5px;" ></div>
                                    <div class="col-sm-2">บาท/</div>
                                    <div class="col-sm-3"><input class="form-control input-sm" type="text" name="product_unit"  style="margin-bottom:5px;"></div>
                                    <div class="col-sm-2">หน่วย</div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="comment">รายละเอียด:</label>
                                        <textarea class="form-control" rows="5" name="product_detail" id="detail"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <form action="/action_page.php">
                                        <div class="col-sm-3">สถานที่ขาย :</div>
                                        <div class="col-sm-9"><input class="form-control input-sm" type="text" name="product_location"  style="margin-bottom:5px;"></div><br>
                                        <div class="col-sm-3">ติดแท็ก:</div>
                                        <div class="col-sm-9"><input class="form-control input-sm" type="text" name="product_tag"  style="margin-bottom:5px;"></div><br>
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
                        <div class="text-center"><button  class="btn btn-success btn-lg" type="submit">บันทึก</button></div>
                    </div>
                </div><br><br>
            </div>
        </div>
    </div>
</div>
<?php echo form_close();?>
