<!-- regist_member_byer  หน้าสมัครเป็นผู้ซื้อ -->
<?php
$attr = array('class'=> 'form-horizontal');
echo form_open_multipart('member/add_member_buyer',$attr);
?>

<div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
</div> <!-- End mainmenu area -->
<br>
<div class="container">
    <form class="form-horizontal" role="form">
        <h2 align="center">ข้อมูลของผู้ซื้อ</h2><br>
        <h3>ข้อมูลส่วนตัว</h3><hr>
        <div class="form-group">
            <label for="display" class="col-sm-3 control-label">รูปประจำตัว</label>
            <div class="col-sm-9">
                <input type="file" name="mem_buyer_pic">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="" class="form-control" autofocus  name="mem_buyer_name">
            </div>
        </div>
        <div class="form-group">
            <label for="idNum" class="col-sm-3 control-label">เลขทีบัตรประชาชน</label>
            <div class="col-sm-9">
                <input type="text" id="idcard" placeholder="" class="form-control"  name="mem_buyer_idcard" maxlength="13">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">วันเกิด</label>
            <div class="col-sm-9">
                <input type="date" id="birth" class="form-control" name="mem_buyer_birth">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">e-mail</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="" class="form-control" name="mem_buyer_email">
            </div>
        </div>
        <div class="form-group">
           <label for="email" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
           <div class="col-sm-9">
               <input type="phone" id="tel" placeholder="" class="form-control" name="mem_buyer_tel" maxlength="10">
           </div>
      </div>
        <div class="form-group">
            <label for="userName" class="col-sm-3 control-label">ชื่อผู้ใช้</label>
            <div class="col-sm-9">
                <input type="password" id="username" placeholder="" class="form-control" name="mem_buyer_username">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">รหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control" name="mem_buyer_password" maxlength="8">
            </div>
        </div>
        <div class="form-group">
            <label for="confirmPassword" class="col-sm-3 control-label">ยืนยันรหัสผ่าน</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="" class="form-control">
            </div>
        </div>


        <h3>ที่อยู่จัดส่ง</h3><hr>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ที่อยู่</label>
            <div class="col-sm-9">
                <input type="text-area" id="buyer_address" placeholder="" class="form-control" name="mem_buyer_address">
            </div>
        </div>
        <div class="form-group">
            <label for="subdistric" class="col-sm-3 control-label">ตำบล</label>
            <div class="col-sm-9">
                <input type="text" id="buyer_subdistrict" placeholder="" class="form-control" name="mem_buyer_subdistrict">
            </div>
        </div>
        <div class="form-group">
            <label for="distric" class="col-sm-3 control-label">อำเภอ</label>
            <div class="col-sm-9">
                <input type="text" id="buyer_district" placeholder="" class="form-control" name="mem_buyer_district">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">จังหวัด</label>
            <div class="col-sm-9">
                <input type="text" id="buyer_province" placeholder="" class="form-control" name="mem_buyer_province">
            </div>
        </div>
        <div class="form-group">
            <label for="postcode" class="col-sm-3 control-label">รหัสไปรณีย์</label>
            <div class="col-sm-9">
                <input type="text" id="buyer_postcode" placeholder="" class="form-control" name="mem_buyer_postcode" maxlength="5">
            </div>
        </div>


        <h3>ที่อยู่ใบเสร็จ</h3><hr>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">ที่อยู่</label>
            <div class="col-sm-9">
                <input type="address" id="address_bill" placeholder="" class="form-control" name="mem_buyer_address_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="subdistric" class="col-sm-3 control-label">ตำบล</label>
            <div class="col-sm-9">
                <input type="text" id="subdistrict_bill" placeholder="" class="form-control" name="mem_buyer_subdistrict_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="distric" class="col-sm-3 control-label">อำเภอ</label>
            <div class="col-sm-9">
                <input type="text" id="district_bill" placeholder="" class="form-control" name="mem_buyer_district_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">จังหวัด</label>
            <div class="col-sm-9">
                <input type="text" id="province_bill" placeholder="" class="form-control" name="mem_buyer_province_bill">
            </div>
        </div>
        <div class="form-group">
            <label for="postcode" class="col-sm-3 control-label">รหัสไปรณีย์</label>
            <div class="col-sm-9">
                <input type="text" id="postcode_bill" placeholder="" class="form-control" name="mem_buyer_postcode_bill" maxlength="5">
            </div>
        </div>
          <br>
        <div class="form-group">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                 <button type="submit" class="btn btn-info btn-block" href="">สมัครสมาชิก</button>
            </div>
        </div>
        <br>
    </form> <!-- /form -->
</div>
<?php echo form_close();?>
