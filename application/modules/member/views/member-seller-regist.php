<?php
$attr = array('class' => 'form-horizontal');
echo form_open('member/add_regis_seller',$attr);
?>
<div class="container">
    <form class="form-horizontal" role="form"><br/>
        <h2>ข้อมูลของผู้ขาย</h2>
        <h3>ข้อมูลส่วนตัว</h3>
        <div class="form-group">
            <label for="display" class="col-sm-3 control-label">รูปประจำตัว</label>
            <div class="col-sm-9">
                <input type="file" name="upload_file">
            </div>
        </div>
        <div class="form-group">
            <label for="idNum" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
            <div class="col-sm-9">
                <input type="namelastname" id="namelastname" placeholder="" class="form-control" name="mem_seller_name">
            </div>
        </div>
        <div class="form-group">
            <label for="idNum" class="col-sm-3 control-label">เลขทีบัตรประชาชน</label>
            <div class="col-sm-9">
                <input type="idcard" id="idcard" placeholder="" class="form-control" name="mem_seller_idcard">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">วันเกิด</label>
            <div class="col-sm-9">
                <input type="date" id="" class="form-control" name="mem_seller_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="" class="form-control" name="mem_seller_email">
            </div>
        </div>
        <div class="form-group">
            <label for="userName" class="col-sm-3 control-label">ชื่อผู้ใช้</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control" name="mem_seller_username">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">รหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control" name="mem_seller_password">
            </div>
        </div>
        <div class="form-group">
            <label for="confirmPassword" class="col-sm-3 control-label">ยืนยันรหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control">
            </div>
        </div>

        
        <h3>ช่องทางการชำระเงิน</h3>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">ธนาคาร</label>
            <div class="col-sm-9">
                <input type="payment" id="paymentpayment" placeholder="" class="form-control" name="mem_seller_payment">
            </div>
        </div>
        <div class="form-group">
            <label for="name-booking" class="col-sm-3 control-label">ชื่อบัญชีธนาคาร</label>
            <div class="col-sm-9">
                <input type="payment" id="paymentName" placeholder="" class="form-control" name="mem_seller_payment_name">
            </div>
        </div>
        <div class="form-group">
            <label for="num-booking" class="col-sm-3 control-label">เลขบัญชีธนาคาร</label>
            <div class="col-sm-9">
                <input type="payment" id="paymentid" placeholder="" class="form-control" name="mem_seller_payment_id">
            </div>
        </div>
        <div class="form-group">
            <label for="nameComp" class="col-sm-3 control-label">ชื่อกิจการ</label>
            <div class="col-sm-9">
                <input type="bussiness_name" id="bussiness_name" placeholder="" class="form-control" name="mem_seller_bussiness_name">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ที่อยู่</label>
            <div class="col-sm-9">
                <input type="bussiness_address" id="bussiness_address" placeholder="" class="form-control" name="mem_seller_bussiness_address">
            </div>
        </div>
        <div class="form-group">
            <label for="subdistric" class="col-sm-3 control-label">ตำบล</label>
            <div class="col-sm-9">
                <input type="bussiness_distric_subdistric" id="bussiness_distric_subdistric" placeholder="" class="form-control" name="mem_seller_bussiness_subdistric">
            </div>
        </div>
        <div class="form-group">
            <label for="distric" class="col-sm-3 control-label">อำเภอ</label>
            <div class="col-sm-9">
                <input type="bussiness_distric" id="bussiness_distric" placeholder="" class="form-control" name="mem_seller_bussiness_distric">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">จังหวัด</label>
            <div class="col-sm-9">
                <input type="bussiness_province" id="bussiness_province" placeholder="" class="form-control" name="mem_seller_bussiness_province">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="address">รายละเอียดกิจการ</label>
            <div class="col-md-9">
            <textarea style="width: 850px;height: 150px" class="form-control" id="address" name="mem_seller_bussiness_detail"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="address">รูปกิจการ</label>
            <div class="col-md-9">
                <input type="file" name="upload_file">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">โทรศัพธ์</label>
            <div class="col-sm-9">
                <input type="tel" id="tel" placeholder="" class="form-control" name="mem_seller_tel">
            </div>
        </div>

        <h3>ที่อยู่ใบเสร็จ</h3>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ที่อยู่</label>
            <div class="col-sm-9">
                <input type="address_bill" id="address_bill" placeholder="" class="form-control" name="mem_seller_address_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="subdistric" class="col-sm-3 control-label">ตำบล</label>
            <div class="col-sm-9">
                <input type="subdistric_bill" id="subdistric_bill" placeholder="" class="form-control" name="mem_seller_subdistrict_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="distric" class="col-sm-3 control-label">อำเภอ</label>
            <div class="col-sm-9">
                <input type="distric_bill" id="distric_bill" placeholder="" class="form-control" name="mem_seller_district_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">จังหวัด</label>
            <div class="col-sm-9">
                <input type="province_bill" id="province_bill" placeholder="" class="form-control" name="mem_seller_province_bill">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-info btn-block" href="">สมัครสมาชิก</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->
<?php echo form_close();?>