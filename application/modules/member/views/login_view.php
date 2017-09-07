<style type="text/css">
    #box-oh{
      box-shadow: 0px 0px 10px #888888;
      height: 300px;
      padding: 20px 100px 20px 100px;
      margin-bottom: 20px;
    }
    input.form-contron{
      padding-right:0px;
    }
</style>
<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('Member/check_login',$attr); ?>
<form>
<div class="container" style="margin-top: 30px;">
  <div id="box-oh">
    <div class="input-group" style="margin-top: 30px;">
     
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> :ชื่อผู้ใช้งาน</span>
      <input type="text" class="form-control" name="User" placeholder="">
    </div>
    <div class="input-group" style="margin-top: 30px;">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> :รหัสผ่าน</span>
      <input id="password" type="password" class="form-control" name="pass" placeholder="" width="10%">
    </div>
    <div style="margin-top: 10px;">
      <a href="">ลืมรหัสผ่าน</a> || <a href="">สมัครสมาชิค</a>
    </div>
    <div align="center" style="margin-top: 20px;">
        <button type="submit">เข้าสู่ระบบ </button>
      </div>
  </div>
  
</div>
</form>
<?php echo form_close(); ?>