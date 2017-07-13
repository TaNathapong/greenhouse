<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก - GreenHouse</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kanit' rel="stylesheet" type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/owl.carousel.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('dist/css/style.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('dist/css/responsive.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('dist/css/flipclock.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('dist/css/flipclock.scss');?>" >

    <!-- timer -->
    <link href="<?php echo base_url('../compiled/flipclock.css');?>" rel="stylesheet" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo base_url('../compiled/flipclock.js');?>"></script>
</head>

<body >
    <!-- header SECTION -->
    <?php $this->load->view('header'); ?>

    <!-- nav_bar SECTION -->
    <?php $this->load->view('nav_bar'); ?>

    <!-- nav_bar SECTION -->
    <?php $this->load->view('logo_area'); ?>


    <section id="main">
        <!-- Content Section START -->
        <section id="content">
            <div class="container col-lg-12">
                <?php $this->load->view($content);?>
            </div>
        </section>
        <!-- Content Section END -->
    </section>

    <!-- footer SECTION -->
    <?php $this->load->view('footer'); ?>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>

</body>
</html>
