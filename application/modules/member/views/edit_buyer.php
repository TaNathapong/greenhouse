<div class="single-product-area">
    <div class="container">
        <div class="product-content-right">
            <div class="row">
                <?php
                $attr = array('class' => 'form-horizontal');
                echo form_open_multipart('Member/update_buyer_details/'.$this->uri->segment(3),$attr);
                ?>
                <?php foreach ($buyer_details as $key => $value)
                {
                    ?>

                    <div class="row">
                        <div class="col-sm-2">
                            <a href="<?php echo site_url('Member/member_buyer_profile_page');?>" type="cancel" class="btn btn-success btn-block">กลับ</a>
                        </div><br>
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-body card-padding text-center">
                                    <h3 class="text-center">แก้ไขข้อมูลคุณ : <?php echo $value['mem_buyer_username'];?></h3>
                                    <!--รูป-->
                                    <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                                        <span class="btn btn-default btn-file m-r-10">
                                            <span class="fileinput-new"><img src="<?php echo base_url('image_gh/'.$value['mem_buyer_pic']);?>" style="width: auto; height: 300px; margin-top: 10px;"></span>
                                            <!--<span class="fileinput-exists">Change</span>-->
                                            <input type="file" name="upload_file">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                                    </div><br>

                                    <div class="card-body card-padding">
                                        <div class="form-group">
                                            <label class="col-sm-3 col-xs-2 control-label">ชื่อ-นามสกุล</label>
                                            <div class="col-sm-9 col-xs-10">
                                                <input class="form-control" id="focusedInput" type="text" name="mem_buyer_name" placeholder="<?php echo $value['mem_buyer_name'];?>">
                                            </div>
                                            <br/><br/>
                                            <label class="col-sm-3 col-xs-2 control-label">เลขที่บัตรประชาชน</label>
                                            <div class="col-sm-9 col-xs-10">
                                                <input class="form-control" id="focusedInput" type="text" name="mem_buyer_idcard" placeholder="<?php echo $value['mem_buyer_idcard'];?>" maxlength="13">
                                            </div>
                                            <br/><br/>
                                            <label class="col-sm-3 col-xs-2 control-label">อีเมลล์</label>
                                            <div class="col-sm-9 col-xs-10">
                                                <input class="form-control" id="focusedInput" type="text" name="mem_buyer_email" placeholder="<?php echo $value['mem_buyer_email'];?>">
                                            </div>
                                            <br/><br/>
                                            <label class="col-sm-3 col-xs-2 control-label">ชื่อผู้ใช้งาน</label>
                                            <div class="col-sm-9 col-xs-10">
                                                <input class="form-control" id="focusedInput" type="text" name="mem_buyer_username" placeholder="<?php echo $value['mem_buyer_username'];?>">
                                            </div>
                                            <br/><br/>
                                            <label class="col-sm-3 col-xs-2 control-label">รหัสผ่าน</label>
                                            <div class="col-sm-9 col-xs-10">
                                                <input class="form-control" id="focusedInput" type="text" name="mem_buyer_password" placeholder="<?php echo $value['mem_buyer_password'];?>">
                                            </div>
                                            <br/><br/>
                                            <label class="col-sm-3 col-xs-2 control-label">ยืนยันรหัสผ่าน</label>
                                            <div class="col-sm-9 col-xs-10">
                                                <input class="form-control" id="focusedInput" type="text" name="mem_buyer_password" placeholder="<?php echo $value['mem_buyer_password'];?>">
                                            </div>
                                            <br/><br/>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2 col-xs-2"></div>
                                            <div class="col-sm-4 col-xs-4">
                                                <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#saveModal">บันทึก</a>
                                            </div>
                                            <div class="col-sm-4 col-xs-4">
                                                <a class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#deleteModal">ลบ</a>
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
                                        <a href="<?php echo site_url('Member/delete_buyer/'.$value['mem_buyer_id']);?>" class="btn btn-success btn-lg btn-block">ยืนยัน</a>
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
