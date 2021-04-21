<?php $this->load->view('admin/common/header'); ?>
<body class="vertical-layout">
<?php
        if($this->session->tempdata('error')){
            $error_msg =  $this->session->tempdata('error');
        }else{
            $error_msg = '';
        }

        ?>
        <?php 
        $cat_name = isset($data[0]->cat_name)? $data[0]->cat_name:'';
        $cat_desc = isset($data[0]->cat_desc)? $data[0]->cat_desc:'';

        ?>
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <?php  $this->load->view('admin/common/logo_bar'); ?>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
              <?php  $this->load->view('admin/common/nav_bar'); ?>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <?php  $this->load->view('admin/common/top_bar'); ?>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Edit Category</h4>
                        
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo  base_url('admin/home'); ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo  base_url('admin/home/category'); ?>">Category</a></li>
                                <li class="breadcrumb-item">Edit Category</li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            
                        <?php echo form_open(); ?>

                            <div class="card-body">
                                <div class="table-responsive">
                                <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Category Name</h5>
                            </div>
                            <?php if($error_msg!='') 
                            {
                                echo "<p class='alert alert-danger'>$error_msg </p>";
                            }
                            ?>
                            <div style="margin-left:450px" id="er_uname" class="custom-error"></div>
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" name="cat_name" id="inputText" value ="<?php echo $cat_name; ?>"  placeholder="Category Name" autocomplete="off">
                                </div>
                                <div style="margin-top:5px" id="er_uname" class="custom-error"><small><?php echo form_error('cat_name');?></small>
                            </div>
                            </div>

                            <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Category Description</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" name="cat_desc" id="inputText" value ="<?php echo $cat_desc; ?>"  placeholder="Category Description" autocomplete="off">
                                </div>
                                <div style="margin-top:5px" id="er_uname" class="custom-error"><small><?php echo form_error('cat_desc');?></small>
                            </div>

                            <!-- <div class="card-header">
                                <h5 class="card-title">Category Image</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name = "cat_img">
                                </div>
                            </div> -->

                            <!-- <div class="card-header">
                                <h5 class="card-title">Category Image</h5>
                            </div> -->
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block font-18">Submit</button>
                                </div>
                            </div>

                            </div>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
<?php  $this->load->view('admin/common/footer.php'); ?>