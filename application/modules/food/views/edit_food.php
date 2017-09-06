
    <?php
        $attr = array('class' => 'form-horizontal');
        echo form_open_multipart('food/update_food_details/'.$this->uri->segment(3),$attr);
    ?>
    <?php foreach ($food_details as $key => $value)
    {
        ?>

        <div class="row"><br/>
            <div class="col-sm-2">
                <a href="<?php echo site_url('food/show_food_page');?>" type="cancel" class="btn btn-success btn-block">ย้อนกลับ</a>
            </div><br>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body card-padding text-center">
                        <h3 class="text-center">แก้ไขรายการอาหาร: <?php echo $value['food_name'];?></h3>
                        <!--รูป-->
                        <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                            <span class="btn btn-default btn-file m-r-10">
                                <span class="fileinput-new"><img src="<?php echo base_url('image_gh/'.$value['food_pic']);?>" style="width: auto; height: 300px; margin-top: 10px;"></span>
                               <input type="file" name="upload_file">
                            </span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                        </div><br>

                        <div class="card-body card-padding">
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-2 control-label">ชื่ออาหาร
                                </label>
                                <div class="col-sm-9 col-xs-10">
                                    <input class="form-control" id="focusedInput" type="text" name="food_name" placeholder="">
                                </div>
                                <br/><br/>
                                <label class="col-sm-3 col-xs-2 control-label">รายละเอียดสินค้า</label>
                                <div class="col-sm-9 col-xs-10">
                                    <input class="form-control" id="focusedInput" type="text" name="food_detail" placeholder="">
                                </div>
                                <br/><br/>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-2"></div>
                                <div class="col-sm-4 col-xs-4">
                                    <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#saveModal">ยืนยันการแก้ไขข้อมูล</a>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <a class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#deleteModal">ลบข้อมูล</a>
                                </div>
                                <div class="col-sm-2 col-xs-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
        <!-- Modal-->
        <div id="saveModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ยืนยันการบันทึกข้อมูล?</h4>
                    </div>

                    <div class="modal-body">
                        <div class="col-sm-4 col-xs-4"></div>
                        <div class="col-sm-4 col-xs-4">
                            <button type="submit" class="btn btn-success btn-lg btn-block">ยืนยัน</button>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <a type="button" data-dismiss="modal" class="btn btn-danger btn-lg btn-block">ยกเลิก</a>
                        </div>
                    </div>

                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <div id="deleteModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ยืนยันการลบข้อมูล?</h4>
                    </div>
<!--ลบข้อมูล-->
                    <div class="modal-body">
                        <div class="col-sm-4 col-xs-4"></div>
                        <div class="col-sm-4 col-xs-4">
                            <a href="<?php echo site_url('food/delete_food/'.$value['food_id']);?>" class="btn btn-success btn-lg btn-block">ยืนยัน</a>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <a type="button" data-dismiss="modal" class="btn btn-danger btn-lg btn-block">ยกเลิก</a>
                        </div>
                    </div>

                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php echo form_close();?>

</div>
<br/>
