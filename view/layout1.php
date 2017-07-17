<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/Chatroom.css">
<link href="<?php echo base_url()?>assets/css/chat-style.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <?php echo link_tag('assets/css/bootstrap.min.css'); ?>
    

    <!-- Custom CSS -->
    <?php echo link_tag('assets/css/sb-admin.css');   ?>
    
    <!-- Morris Charts CSS -->
    <?php echo link_tag('assets/css/plugins/morris.css');  ?>
   
    <!-- Custom Fonts -->
     <?php echo link_tag('assets/font-awesome/css/font-awesome.min.css');  ?>
    <?php echo link_tag('assets/css/my-new-style.css');  ?>
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <div id="wrapper">

       
         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="<?php echo base_url();?>">
              <?php
                $path= base_url('assets/logo/');
             echo  img($path);
              ?>
               
                </a>
                
            </div>
            
            
            <ul class="nav navbar-right top-nav">
            <li>
                <?php $chk = $this->session->userdata('is_login');
                ?>  <a href="#"> <?php echo $chk;  
                 ?> </a>
               
                </li>
                <li>
                
                       <a href="<?php echo base_url()?>admin/profile/<?php echo $chk ?>"> Edit Profile </a>
                        
                 </li>
                 <li>
                
                       <a href="<?php echo base_url()?>admin/logout"> LOGOUT </a>
                        
                 </li>
                             
            </ul>
            
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

              
				<?php $this->load->view($view_file);?>
              

                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url()?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>
