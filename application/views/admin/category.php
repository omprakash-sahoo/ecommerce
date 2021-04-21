<?php $this->load->view('admin/common/header'); ?>
<?php
if($this->session->tempdata('success')){
            $success_msg =  $this->session->tempdata('success');
        }else{
            $success_msg = '';
        }
?>

<?php 


?>
<body class="vertical-layout">
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
                        <h4 class="page-title">Category</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo  base_url('admin/home'); ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo  base_url('admin/home/category'); ?>">Category</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button  onclick="window.location.href='<?php echo  base_url('admin/home/addCategory'); ?>'" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add Category</button>
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
    <!-- Start row -->

        <!-- Start col -->
        
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">All catagory</h5>
                </div>
                <?php if($success_msg!=''){?>

                 <p id ='fademe' class= 'alert alert-info'> <?php  echo $success_msg ?><p>

               <?php } ?>
                <div class="card-body">
                    <div class="table-responsive m-b-30">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Category Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php
                                if($data != ''){ 
                                $slno = 1;
                                
                                foreach($data as $datas){
                                ?>


                                    <th scope="row"><?php echo $slno++ ;?></th>
                                    <td><?php echo $datas->cat_name; ?></td>
                                    <td><?php echo $datas->cat_desc; ?></td>
                                    <?php if($datas->cat_status == 'active') {?>
                                    <td>
                                    
                                    <a href="<?php echo base_url('/admin/home/catActive/'.$datas->id); ?>"><button type="button" class="btn btn-success"><span style="margin-left:8px;margin-right:11px">Active <span></button></a>
                                    </td>

                                    <?php }else{ ?>
                                        <td>
                                        <a href="<?php echo base_url('/admin/home/catActive/'.$datas->id); ?>"><button type="button" class="btn btn-danger">Deactive</button></a>
                                    </td>

                                    <?php } ?>

                                    <td><a href="<?php echo base_url('admin/home/editCategory/'.$datas->id); ?>"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></button></a>
                                    
                                    <a href="<?php echo base_url('admin/home/deleteCategory/'.$datas->id); ?>"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></button><a>

                                    </td>
                                </tr>
                                <?php }
                                
                                    }else{

                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>



        <!-- End col -->
        <!-- Start col -->
        
        <!-- End col -->

    <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
<?php  $this->load->view('admin/common/footer.php'); ?>