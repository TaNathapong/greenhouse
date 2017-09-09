
    <?php
    $attr = array('class' => 'form-horizontal');
    echo form_open_multipart('travel/update_travel_details/'.$this->uri->segment(3),$attr);
    ?>
    <?php foreach ($travel_details as $key => $value)
    {
        ?>

        <div class="row"><br/>
            <div class="col-sm-2">
                <a href="<?php echo site_url('travel/show_travel_page');?>" type="cancel" class="btn btn-success">ย้อนกลับ</a>
            </div><br>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body card-padding text-center">
                        <h3 class="text-center">แก้ไขข้อมูล: <?php echo $value['travel_name'];?></h3>
                        <!--รูป-->
                        <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                            <span class="btn btn-default btn-file m-r-10">
                            <span class="fileinput-new"><img src="<?php echo base_url('image_gh/'.$value['travel_pic']);?>" style="width: auto; height: 300px; margin-top: 10px;"></span>
                                <input type="file" name="upload_file">
                            </span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                        </div><br>

                        <div class="card-body card-padding">
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-2 control-label">ชื่อสถานที่ท่องเที่ยว
                                </label>
                                <div class="col-sm-9 col-xs-10">
                                    <input class="form-control" id="focusedInput" type="text" name="travel_name" placeholder="">
                                </div>
                                <br/><br/>
                                <label class="col-sm-3 col-xs-2 control-label">รายละเอียด</label>
                                <div class="col-sm-9 col-xs-10">
                                    <input class="form-control" id="focusedInput" type="text" name="travel_detail" placeholder="">
                                </div>
                                <br/><br/>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-xs-4"></div>
                                <div class="col-sm-2 col-xs-2">
                                    <a class="btn btn-success" data-toggle="modal" data-target="#saveModal">ยืนยันการแก้ไข</a>
                                </div>
                                <div class="col-sm-2 col-xs-2">
                                <a href= "<?php echo site_url('travel/show_travel_page/'.$value['travel_id']);?>">
                                    <button type="button" class="btn btn-warning">ยกเลิก</button></a>
                                </div>
                                <div class="col-sm-4 col-xs-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
<!-- ยืนยันการแก้ไขข้อมูล Modal-->
        <div id="saveModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ยืนยันการแก้ไขข้อมูล?</h4>
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
        <?php
    }
    ?>
    <?php echo form_close();?>

</div>
<br/>
