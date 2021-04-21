<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Orbiter - Bootstrap Minimal & Clean Admin Template</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/images/favicon.ico">
    <!-- Start css -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/admin/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box register-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                <?php 
                                    echo form_open('',['name' => 'myForm'],['id' => 'admRegister']);
                                    ?>
                                        <div class="form-head">
                                            <a href="<?php echo base_url('admin/Home/register'); ?>" class="logo"><img src="<?php echo base_url();?>assets/admin/images/logo.svg" class="img-fluid" alt="logo"></a>
                                        </div> 
                                        <h4 class="text-primary my-4">Sign Up !</h4>
                                        <div class="form-group">
                                            <input type="text" name ="username" class="form-control" id="username" placeholder="Enter Username here" value="<?php echo set_value("username");?>">
                                        </div>

                                        <div id="er_uname" class="custom-error"><small><?php echo form_error('username'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email here" value="<?php echo set_value("email");?>">
                                        </div>
                                        <div id='er_email'class="custom-error"><small><?php echo form_error('email'); ?></small></div>
                                        <div class="form-group">
                                            <input type="text" name="emp_id"  class="form-control" id="emp_id" placeholder="Enter Employee id here" value="<?php echo set_value("emp_id");?>">
                                        </div>
                                        <div id = "er_emp" class="custom-error"><small><?php echo form_error('emp_id'); ?></small></div>
                                        <div class="form-group">
                                            <input type="password" name="pwd" class="form-control" id="password" placeholder="Enter Password here" value="<?php echo set_value("pwd");?>">
                                        </div>
                                        <div id="er_pwd" class="custom-error"><small><?php echo form_error('pwd'); ?></small></div>
                                        <div class="form-group">
                                            <input type="password" name="cpwd" class="form-control" id="cpassword" placeholder="Re-Type Password" value="<?php echo set_value("cpwd");?>">
                                        </div>
                                        <div id="er_cpwd" class="custom-error"><small><?php echo form_error('cpwd'); ?><small></div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox text-left">
                                                    <input <?php if(set_value("terms")=="1") echo "checked"; ?> type="checkbox" name="terms" class="custom-control-input" id="terms">
                                                    <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of Orbiter</label>
                                                </div>
                                                <div id="er_terms" class="custom-error"><small><?php echo form_error('terms'); ?></small></div>                                
                                            </div>
                                        </div>  
                                      <button id="submit" type="submit" class="btn btn-success btn-lg btn-block font-18">Sign up</button>
                                      <?php
                                        echo form_close();
                                        ?>
                                    <p class="mb-0 mt-3">Already have an account? <a href="<?php echo base_url('admin/auth/login');?>">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/modernizr.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/detect.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/main.js"></script>
    <!-- End js -->
</body>
</html>