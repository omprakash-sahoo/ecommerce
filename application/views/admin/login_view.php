<?php $this->load->view('admin/common/header'); ?>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
        <?php
        if($this->session->tempdata('error')){
            $error_msg =  $this->session->tempdata('error');
        }else{
            $error_msg = '';
        }
        ?>
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->

                <!-- Error message Signup success -->
                        <?php if($this->session->tempdata('regsuccess')){?>

                        <div class="jumbotron mt-3">
                            <h1 class="text-success">Thank you</h1>
                            <p class="lead"><?php echo $this->session->tempdata('regsuccess'); ?></p>
                            <a class="btn btn-lg btn-primary" href="<?php echo base_url('admin/auth/login'); ?>">Login Page</a>
                        </div>
                <!-- Error message for signup fail -->
                        <?php }else if($this->session->tempdata('regerror')){ ?>

                            <div class="jumbotron mt-3">
                            <h1 class="text-danger">Sorry!!</h1>
                            <p class="lead"><?php echo $this->session->tempdata('regerror'); ?></p>
                            <a class="btn btn-lg btn-primary" href="<?php echo base_url('admin/auth/login'); ?>">Contact</a>
                        </div>
            <!-- Error message for Account not activated -->
                       <?php }else if($this->session->tempdata('notact')){ ?>
                        <div class="jumbotron mt-3">
                            <h1 class="text-danger">Sorry!!</h1>
                            <p class="lead"><?php echo $this->session->tempdata('notact'); ?></p>
                            <a class="btn btn-lg btn-primary" href="<?php echo base_url('admin/auth/login'); ?>">Contact</a>
                        </div>
                       <?php }else{
                            ?>
                            <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                               <?php  echo form_open('',['name' => 'myForm']); ?>
                                        <div class="form-head">
                                            <a href="index.html" class="logo"><img src="<?php echo base_url();?>assets/admin/images/logo.svg" class="img-fluid" alt="logo"></a>
                                        </div>
                                        <h2><?php echo $this->session->tempdata('success'); ?></h2>                  
                                        <h4 class="text-primary my-4">Log in !</h4>
                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control" id="username" placeholder="Enter Email id  here" value="<?php echo set_value('email'); ?>" >
                                        </div>
                                        <div id="er_uname" class="custom-error"><small><?php echo form_error('email');  ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input name="pwd" type="password" class="form-control" id="password" placeholder="Enter Password here">
                                        </div>
                                        <div id="er_uname" class="custom-error"><small><?php echo form_error('pwd');
                                        echo $error_msg; 
                                         ?></small>
                    
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>                                
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="forgot-psw"> 
                                                <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div>
                                        </div>                          
                                        <button id="submit" type="submit" class="btn btn-success btn-lg btn-block font-18">Login</button>
                                </form>

                                    <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
                                    <div class="social-login text-center">
                                        <button type="submit" class="btn btn-primary-rgba font-18"><i class="mdi mdi-facebook mr-2"></i>Facebook</button>
                                        <button type="submit" class="btn btn-danger-rgba font-18"><i class="mdi mdi-google mr-2"></i>Google</button>
                                    </div>
                                    <p class="mb-0 mt-3">Don't have a account? <a href="<?php echo base_url('admin/register'); ?>">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!-- End js -->
</body>
</html>