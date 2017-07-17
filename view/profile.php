<body>

            <div class="container-fluid">

              <h2 id="page-heading"> Profile </h2>
              <span id="success-notify" class="alert icon-animated-vertical" style="padding:2px 10px 3px 10px; margin-left:17%;margin-bottom:-6px; display:none"></span>
              <div class="checkpassword">
              <?php $a=$this->session->flashdata('ok');
        echo $a;?>
        </div>
              <div class="alertfail">
			 <?php      	
    	$a = $this->session->flashdata('sucess');
    	echo $a; 
    	?>		
    	</div>
				<div class="profile-box">
                	 <form method="post" action="<?php echo base_url() ?>admin/profile/<?php echo $rec->id?>" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm();">
                   		 <div class="profile-pic">
							
							<?php if ($rec->profile_image ==""){ ?>
							<center><img src="<?php echo base_url() ?>assets/images/avtar1.jpg" class="img-responsive"  style="width: 14%;"></center>
							<?php }else{?>
                       <center> <img src="<?php echo base_url()?>FileUpload/user_profile/<?php echo $rec->profile_image ?>" class="img-responsive" style="width: 14%;"></center>
						<?php } ?>
                       <center><h4><?php echo $rec->name ?></h4></center>
                       
                       <center>
                       
                       <span id="fileselector">
                        
                            <label class="btn btn-default" for="upload-file-selector" id="up-btn">
                                <input id="upload-file-selector" name="profile_image" type="file">
                              Edit Photo
                            </label>
                        
                    	</span>
    				
                    </center>
                   
                        
                    </div>
                    
                    <div class="content">
                    	
                        <br>
                        
                        <div class="row">
                        	
                            <div class="col-md-6">
                            	
                                <div class="form-group">
					
                    				<input type="text" class="form-control" id="first_name" name="name" placeholder="First Name *" onkeypress="text(event)"  value="<?php echo $rec->name?>" required>
					
                    			</div>
                                       
                            </div>
                            
                            <div class="col-md-6">
                            	
                                <div class="form-group">
					
                    				<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name *" onkeypress="text(event)"  value="<?php echo $rec->last_name?>"  required>
					
                    			</div>
                    
                            </div>
                            
                        </div>
                        
                       <div class="row">
                        	
                            <div class="col-md-6">
                            	
                                <div class="form-group">
					
                    				<input type="email" class="form-control" id="email" name="email"  placeholder="Email *" value="<?php echo $rec->email?>" onfocusout="check(this.value)" required>
					
                    			</div>
                                       
                            </div>
                            
                            <div class="col-md-6">
                            	
                                <div class="form-group">
					
                    				<input type="tel" class="form-control" id="mobile_no" name="mobile" placeholder="Mobile Number *" onkeypress="num(event)" pattern=".{0}|.{10,}"  minlength="10" maxlength="10" value="<?php echo $rec->mobile?>"required>
					
                    			</div>
                    
                            </div>
                            
                        </div>
                        
                         <div class="row">
                        	
                            <div class="col-md-12">
                            	
                                <div class="form-group">

                                 <textarea class="form-control" rows="5" id="address" name="address" placeholder="Address *" ><?php echo $rec->address?></textarea>

                                </div>
                                       
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                        	
                            <div class="col-md-12">
                            
                            	<input type="submit" class="btn btn-success pull-right" id="profile-submit" name="submit" value="Submit">
                            	<input type="reset" class="btn btn-success" id="profile-submit" name="changepass" value="Change Password" onclick="change()">
                            </div>
                            
                        </div>
                        
                        
                    </form>
                        
                    </div>
                    
                </div>
              
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        
</body>
<script type="text/javascript">
  function change()
  {
     window.location.href = "<?php echo base_url()?>admin/changepassword/<?php echo $this->session->userdata('is_login') ?> ";
  }
</script>

<script type="text/javascript">
  function text(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[A-z ]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

 function num(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

<script>
var msg="<?php echo $msg; ?>";

if(msg==1)
{
  $('#success-notify').text("Edit Profile Successfully").removeClass('alert-success').addClass("alert-success").show(1000).delay(4000).fadeOut("slow");
}
</script>

<script>
function validateForm() {
    var x = document.forms["myForm"]["user_email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>	
 <script type="text/javascript"> 
      $(document).ready( function() {
      $(".alertfail").css("background-color","green");
      $(".alertfail").css("width","20%"); 
        $('.alertfail').delay(1000).fadeOut();
      });
    </script>
 <script type="text/javascript"> 
      $(document).ready( function() {
      $(".checkpassword").css("background-color","green");
      $(".checkpassword").css("width","40%"); 
        $('.checkpassword').delay(1000).fadeOut();
      });
    </script>
 
   
    