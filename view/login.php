            <div class="container-fluid">
                            
              <div class="row margintop10">
              	
                <div class="col-md-3">
                
                </div>
                
                <div class="col-md-6">
                         
          <div class="alertmsg">
			 <?php      	
    	$a = $this->session->flashdata('register');
    	echo $a; 
    	?>		
    	</div>
    	<div class="faillogin">
			 <?php      	
    	$a = $this->session->flashdata('registerfail');
    	echo $a; 
    	?>		
    	</div>
<div class="alertfail">
       <?php        
      $a = $this->session->flashdata('loginfail');
      echo $a; 
      ?>    
      </div>
      
                    <div class="panel panel-default">
                   
                        <div class="panel-heading">
                        
                            <h3 class="panel-title">Log In</h3>
                        
                        </div>
			  	
                    <div class="panel-body">
                        
                        <form accept-charset="UTF-8" role="form" method="post" action="<?php echo base_url() ?>admin/login/">
                        
                        <fieldset>
                        
                            <div class="form-group">
                        
                                <input class="form-control" placeholder="Email *" name="email" type="email">
                        
                            </div>
                        
                            <div class="form-group">
                        
                                <input class="form-control" placeholder="Password *" name="password" type="password" value="">
                        
                            </div>
                        
                            
                         <center>   <input class="btn btn-success btn-block" type="submit" name="login" value="Log In" id="login-btn"></center>
                            
                            <br>
                            
                            <center style="margin-top:10px;"><a href="<?php echo base_url()?>admin/Forgotten_Password">Forgot Password ?</a></center>
                            
                            <br>
                            
                            <center style="margin-top:10px;"><a href="<?php echo base_url()?>admin/register_user">Register Here</a></center>
                            
                        </fieldset>
                        
                        </form>
                        
                    
                        
                    
                    </div>
                
			</div>
                
                </div>
                
                <div class="col-md-3">
                </div>
                
              </div>
                  
              
			
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        
</body>

<script>
var msg="<?php echo $msg?>";

if(msg==1)
{
  $('#success-notify').text("Invalid Email or Password").removeClass('alert-danger').addClass("alert-danger").show(1000).delay(4000);
}


</script>
<script type="text/javascript"> 
      $(document).ready( function() {
      $(".alertmsg").css("background-color","green"); 
        $('.alertmsg').delay(1000).fadeOut();
      });
    </script>
    
    <script type="text/javascript"> 
      $(document).ready( function() {
      $(".alertfail").css("background-color","red"); 
        $('.alertfail').delay(1000).fadeOut();
      });
    </script>
 <script type="text/javascript"> 
      $(document).ready( function() {
      $(".faillogin").css("background-color","red"); 
        $('.faillogin').delay(1000).fadeOut();
      });
    </script>



