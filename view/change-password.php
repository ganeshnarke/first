<?php
$msg = "";
if(isset($_POST['submit']))
{
   $password= $_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password != $cpassword){
         $msg = "passwords doesn't match";
       
    }
    
$pass=md5($password);
    $a = $this->session->userdata('is_login');
  $query =  $this->db->where('id', $a)
                    ->set('password', $pass)
                      ->update('users');
                      
    
   //$query = mysql_query("update users set password ='$pass' where id='$a' ");
   if($query)
   {
    $this->session->set_flashdata('ok','Password updated successfully');
    redirect('admin/profile');

   }
   
}

?>

<body>

            <div class="container-fluid">

              <h2 id="page-heading"> Change Password </h2>
              <form method="post" action="" name="myForm" onsubmit="return validateForm();">
              <div class="content">
<div class="row">
                        	
                            <div class="col-md-6">
                            	
                                <div class="form-group">
					
                    				<input type="password" class="form-control" id="password" name="password" placeholder="Password *" value="" required>
					
                    			</div>
                                       
                            </div>
                            
                        </div>
                        
                        <div class="row">
                        	<?php echo $msg; ?> 
                            <div class="col-md-6">
                            	
                                <div class="form-group">
					
                    	<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password *" value="" onfocusout="check_password(this.value)" id="con_password" required>
					
                    			</div>
                                       
                            </div>
                            
                        </div>
                        <input type="submit" class="btn btn-success " id="profile-submit" name="submit" value="Submit">
                        
                        <input type="reset" class="btn btn-success " id="profile-submit" name="cancle" value="cancle" onclick="resetbtn()">

</div>
                         </form>
                        </div>
                        </body>


                        <script type="text/javascript">
                            function resetbtn()
                            {
                                 window.location.href =  "<?php echo base_url('admin/profile'); ?>";
                            }
                        </script>
                        
          <script type="text/javascript">
                         function check_password(value)
    {
      old_password=$('#password').val();
      if(old_password!=value)
      {
        $('#password').val("");
        $('#con_password').val("");
       
         alert("Confirm Password Do not Match");
       

      }
    }
     </script>