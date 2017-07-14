<?php
$head = "hello world!";
?>
<title>การท่องเที่ยว - GreenHouse</title>

<div class="container" style="padding: 25px;">
    <h3>การท่องเที่ยวที่แนะนำ</h3>
    <div class="row row-margin-bottom">
        <?php
        foreach ($travel_list as $key => $value)
        {
            ?>
            <div class="col-md-6 no-padding lib-item" style="padding: 20px" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="<?php echo site_url('shop/travel_details_page/'.$value['travel_id']);?>">
                                <img class="lib-img-show" src="<?php echo $value['travel_pic'];?>" style="width:450px; height:200px;">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                <?php echo $value['travel_name'];?>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <?php echo $value['travel_detail'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <hr/>

    <h3>การท่องเที่ยวอื่นๆ</h3>
    <div class="row form-group product-chooser" style="padding: 10px">
        <?php
        for($i=1;$i<=2;$i++)
        {
            foreach ($travel_list as $key => $value)
            {
                ?>
                <div class="img-thumbnail col-xs-6 col-md-3" style="margin-bottom: 10px;">
                    <div class="product-chooser-item selected">
                        <a href="<?php echo site_url('shop/travel_details_page/'.$value['travel_id']);?>">
                            <img src="<?php echo $value['travel_pic'];?>" class=" col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Mobile and Desktop" style="width:300px; height:140px;">
                        </a>
                        <div class="col-md-12" style="padding:10px">
                            <span class="description">
                                <?php echo $value['travel_detail'];?>
                                <br/>
                                <a href="<?php echo site_url('shop/travel_details_page/'.$value['travel_id']);?>">อ่านเพิ่มเติม</a>
                            </span>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>

    </div>
</div>
