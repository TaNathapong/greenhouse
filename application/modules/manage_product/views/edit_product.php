<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('Manage_product/set_edit_prouduct_page', $attr);?>

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
            <?php foreach ($product_list as $key => $value)
            {
                ?>
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
                                    <div class="form-group">
                                        <div class="col-sm-3">ชื่อสินค้า :</div>
                                        <div class="col-sm-9"><textarea class="form-control" type="text" name="product_name" style="margin-bottom:5px;"><?php echo $value['product_name'];?></textarea></div><br>
                                        <div class="col-sm-3">ชื่อลิงค์ :</div>
                                        <div class="col-sm-9"><textarea class="form-control" type="text" name="product_link"  style="margin-bottom:5px;"><?php echo $value['product_link'];?></textarea></div><br>
                                    </form>
                                </div><br>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-2">ราคา:</div>
                                        <div class="col-sm-3"><textarea class="form-control" type="text" name="product_price"  style="margin-bottom:5px;" ><?php echo $value['product_price'];?></textarea></div>
                                        <div class="col-sm-2">บาท/</div>
                                        <div class="col-sm-3"><textarea class="form-control" type="text" name="product_unit"  style="margin-bottom:5px;"><?php echo $value['product_unit'];?></textarea></div>
                                        <div class="col-sm-2">หน่วย</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="comment">รายละเอียด:</label>
                                        <textarea class="form-control" name="product_detail" rows="5" id="detail"><?php echo $value['product_detail'];?></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">สถานที่ขาย :</div>
                                        <div class="col-sm-9"><textarea class="form-control" type="text" name="product_location"  style="margin-bottom:5px;"><?php echo $value['product_location'];?></textarea></div><br>
                                        <div class="col-sm-3">ติดแท็ก:</div>
                                        <div class="col-sm-9"><textarea class="form-control" type="text" name="product_tag"  style="margin-bottom:5px;"><?php echo $value['product_tag'];?></textarea></div><br>
                                    </form>
                                </div>
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
            <?php

    }
    ?>
        </div>
    </div>
</div>
<?php echo form_close();?>
