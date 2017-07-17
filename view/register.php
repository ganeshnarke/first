<body>
  <div class="container-fluid">
              
              <div class="row">
              	
                <div class="col-md-3">
                </div>
                
                <div class="col-md-6">
                	<span id="success-notify" class="alert icon-animated-vertical" style="padding:2px 10px 3px 10px; margin-top: 10%; margin-left:17%; display:none;"></span>
                    <div class="panel panel-default">
			  	
                        <div class="panel-heading">
                        
                            <h3 class="panel-title">Register</h3>
                        
                        </div>
			  	
                    <div class="panel-body">
                        
                        <form method="POST" accept-charset="UTF-8" role="form" action="<?php echo base_url() ?>admin/register_user" >
                        
                        <fieldset>
                        
                            <div class="form-group">
                        
                                <input class="form-control" id="valid_email" onfocusout="check_email(this.value)" placeholder="Email *" name="email" type="email">
                        
                            </div>
                        
                            <div class="form-group">
                        
                             <input class="form-control" id="password" placeholder="Password *" name="password" type="password" value="">
                        
                            </div>
                            
                            <div class="form-group">
                        
                                <input class="form-control" id="con-password" placeholder="Confirm Password *" onfocusout="check_password(this.value)" name="password" type="password" value="">
                        
                            </div>
                        
                            
                        <center>    <input class="btn btn-success btn-block" type="submit" name="Register" value="Register" id="register-btn">
                         </center>
                            
                            <br>
                            
                            <center style="margin-top:10px;"><span> Already Registered ? </span> <a href="<?php echo base_url()?>admin/login"> Log In</a></center>
                            
                            
                            
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
            
            
            <script>
var msg="<?php echo $msg?>";
var old="<?php echo $this->session->userdata('password')?>";
if(msg==1)
{
  $('#success-notify').text("Password Changed Successfully").removeClass('alert-success').addClass("alert-success").show(1000).delay(4000).fadeOut("slow");
 }
 function check_password(value)
    {
      old_password=$('#password').val();
      if(old_password!=value)
      {
        $('#password').val("");
        $('#con-password').val("");
       
          $('#success-notify').text("Confirm Password Do not Match").removeClass('alert-success').addClass("alert-danger").show(1000).delay(4000).fadeOut("slow");
       

      }
    }
</script>

        </body>
		
<?php
error_reporting(1);
if(isset($_POST['Register'])) {
  
   $mail=$_POST['email'];
   $q=mysql_query("select * from users where email='".$mail."'") or die(mysql_error());
 
 $p=mysql_affected_rows();
 if($p!=0) {
    $res=mysql_fetch_array($q);
  $to=$res['email'];
  $userid=$res['user_id'];
  $subject='Registration';
  $message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="format-detection" content="telephone=no"> 
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet" type="text/css">
  <title>Reset Password</title>
<style type="text/css">
                        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700);
                        html{width: 100%;}
                        body{ width: 100%; background-color: white; margin:0; padding:0;-webkit-font-smoothing: antialiased;   mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}
                        p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
                        table{ font-size: 14px;
                        border: 0px solid black; }
                        span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
@media only screen and (max-width: 600px) 
         {
      body{min-width:100% !important;}

      .container        {width:450px !important; min-width:450px !important;}
      .container_2      {width:450px !important; min-width:450px !important;}
      .container_3      {height:180px !important;}
      .center           {margin:0 auto 0 auto !important; padding-top: 20px;}
      .center_menu      {margin:0 auto 0 auto !important; text-align:center !important;}
      .container_wrap   {display:inline-block !important; width:450px !important; height:auto !important;}
      .container_wrap_2 {display:block !important; width:450px !important; text-align:center !important; height:auto !important;}
      .container_wrap_margin{display:block !important; width:100% !important; height:10px !important;}
      .text             {width:380px !important; text-align:center !important;}
      .title            {width:450px !important;text-align:center !important;}
      .title_2          {width:450px !important;border:none !important; text-align:center !important; padding-left:none !important;}
      .image_container_main a img   {width:450px !important; height:auto !important }
      .image_container  {width: 100% !important; height: auto !important; } 
      .disable          {display: none !important;}
      .enable           {display: inline !important;}
      .bgnd             {background-size:cover !important;}
      .padding_top      {padding-top: 20px;}
      .padding_bottom   {padding-bottom: 20px;}
      .height           {height:400px !important;}
   }
@media only screen and (max-width: 481px) 
         {
      body {min-width:100% !important;}
       
      .container        {width:300px !important; min-width:300px !important;}
      .container_2      {width:300px !important; min-width:300px !important;}
      .container_3      {height:180px !important;}
      .center           {margin:0 auto 0 auto !important;}
      .center_menu      {margin:0 auto 0 auto !important; }
      .container_wrap   {display:inline-block !important; width:300px !important; height:auto !important; border-radius:0 !important;}
      .container_wrap_2 {display:block !important; width:300px !important; height:auto !important;}
      .container_wrap_margin{display:block !important; width:100% !important; height:10px !important;}
      .text             {width:270px !important; text-align:center !important;}
      .title            {text-align:center !important;width:300px !important; }
      .title_2          {width:450px !important;border:none !important; text-align:center !important; padding-left:none !important;}
      .image_container_main a img   {width:300px !important; height:auto !important;}
      .image_container  {width: 100% !important; height: auto !important; } 
      .disable          {display: none !important;}
      .enable           {display: inline !important;}
      .bgnd             {background-size:cover !important;}
      .padding_top      {padding-top: 20px;}
      .padding_bottom   {padding-bottom: 20px;}
      .height           {height:300px !important;}
      }
</style>
</head>
<!-- section_1 -->
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" data-bgcolor="s1_bg" style="margin:0 auto; <!--background: url(img/s1_bg.jpg)--> center center / cover no-repeat;background-color:#fff; max-width:800px;" data-module="section_1" data-thumb="thumbnails/s1.png" data-bg="s1_bg_img">
    <tbody>
	<br/><br/>
      <tr mc:repeatable="">
         <td width="600" align="center"style="background-color:#f25f00;border-top-left-radius: 15px;border-top-right-radius: 15px">
            <table align="center" cellpadding="0" cellspacing="0" border="0" class="container" style="table-layout:fixed;margin:0 auto; border-collapse:collapse; border: 0px;" mc:edit="s1">
               <tbody>
                  <tr style="background-color:#f25f00;">
                     <td align="center" class="container">
                        <table width="600" align="center" cellpadding="0" cellspacing="0" border="0" class="container" style="border-collapse:collapse; border: 0px;">
                           <tbody>
                              <!-- margin -->
                              <tr>
                               <!--  <td <td height="20" width="2" style="font-size: 2px; line-height: 20px; height:20px;">&nbsp;
                                    <img src="img/spacer.png" alt="spacer" width="1" height="1">
                                 </td>-->
                              </tr>
                              <!-- margin -->
                              <tr>
                                 <td>
                                    <table class="container_wrap" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;">
                                       <tbody>
                                           <tr>
                                             <th width="280" align="left" class="container_wrap" valign="top" style="text-align:left;margin:0; padding:0;vertical-align:top;">
                                                <table class="container_wrap" align="left" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; border: 0px;">
                                                   <tbody>
                                                      <tr>
                                                         <td valign="top" align="left">
                                                            <table class="title" width="280" align="left" cellpadding="0" cellspacing="0" border="0" class="text" style="border-collapse:collapse; border: 0px; ">
                                                               <tbody>
                                                                  <!-- text -->
                                                                 <tr>
                                                                     <td class="title">
                                                                        <a><img src="http://cyperts.net/ban/assets/logo/mainbancalogo.png" alt="" style="padding-top:15px;padding-bottom:15px;color:#fff;" /></a>
                                                                     </td>
																	
                                                                  </tr>
																  
                                                                  <!-- text -->
                                                                  <!-- margin -->
                                                                 <!-- <tr>
                                                                     <td height="20" width="2" style="font-size: 2px; line-height: 20px; height:20px;">&nbsp;
                                                                       <!-- <img src="img/spacer.png" alt="spacer" width="1" height="1">-->
                                                                    <!-- </td>
                                                                  </tr>
                                                                  <!-- margin -->
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </th>
                                                                                     </tr>
                                       </tbody>
                                    </table>
									
                                 </td>
                              </tr>
                              <!-- margin -->
                             
                              <!-- margin -->
                              <!-- margin -->
                              
                              <!-- margin -->
                             
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table> 
<!-- section_1 -->



<!-- ================================================================================================================================ -->





<!-- section_11 -->
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" data-bgcolor="s11_bg" style="margin:0 auto;<!-- background: url(img/s11_bg.jpg)--> center center / cover no-repeat;background-color:#847f8b; max-width:800px;" data-module="section_11" data-thumb="thumbnails/s11.png" data-bg="s11_bg_img">
    <tbody>
      <tr mc:repeatable="">
         <td width="600" align="center"style="background-color:#eee;">
            <table align="center" cellpadding="0" cellspacing="0" border="0" class="container" style="table-layout:fixed;margin:0 auto; border-collapse:collapse; border: 0px;" mc:edit="s11">
               <tbody>
                  <tr>
                     <td align="center" class="container">
                        <table width="600" align="center" cellpadding="0" cellspacing="0" border="0" class="container" style="border-collapse:collapse; border: 0px;">
                           <tbody>
                              <!-- margin -->
                              <tr>
                                 <td <td height="60" width="2" style="font-size: 2px; line-height: 60px; height:60px;">&nbsp;
                                  <!--  <img src="img/spacer.png" alt="spacer" width="1" height="1">-->
                                 </td>
                              </tr>
                              
                              <tr>
                                 <td height="10" width="2" style="font-size: 2px; line-height: 10px; height:10px;">&nbsp;
                                   <!--<img src="img/spacer.png" alt="spacer" width="1" height="1">-->
                                 </td>
                              </tr>
                              <!-- margin -->
                              <tr>
                                 <td>
                                    <!--<table class="container" align="center" width="380" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; ">
                                       <tbody>
                                          <tr>
                                             <td align="left" width="520">-->
                                                <table class="container" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" style=" mso-table-lspace:0pt; mso-table-rspace:0pt;border:none;">
                                                   <tbody>
                                                       <!-- text -->
                                                      <tr>
                                                         <td class="text" style="text-decoration: none; font-family: "Raleway", Open Sans, sans-serif; font-size: 15px; line-height:22px; color:#000; text-align:justify; font-weight:400;" data-size="s11_text_size" data-min="12" data-max="36" data-color="s11_text_color" mc:edit="s11_text"><h2 style="color:#f25f00;"><strong>Reset Your Password?</strong></h2><br/>If you requested a password reset for @ user_name, click the Button Below.If you didnt make a request,
                                                       </p>  </td>
                                                      </tr>
                                                      <!-- text -->
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
										  <table class="title" border="0" cellspacing="0" cellpadding="0" align="left" style="border: 0px; cellpadding:0px; cellspacing:0px; border-collapse:collapse; border: 0px;">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <table border="0" cellspacing="0" cellpadding="0" align="left" style="border: 0px; cellpadding:0px; cellspacing:0px; border-collapse:collapse; border: 0px;">
                                                   <tbody>
                                                      <tr>
													  
                                                         <br><td bgcolor="#f25f00;" width="140" height="40" style="background:#f25f00;font-family:"Raleway", Open Sans, sans-serif; font-size:16px; font-weight:500; text-align:center; color:#000000; border-radius:5px;" data-bgcolor="s1_button_bg">
                                                            <a href="<?php base_url()?>admin/Reset_Password/'.$userid.'" style="text-decoration:none; color:#fff;" data-size="s1_btn1_text_size" data-min="12" data-max="36" data-color="s1_btn1_text_color" mc:edit="s1_b1">
                                                               Reset Password
                                                            </a>
                                                         </td>
                                                         <!-- margin -->
                                                         <!--<td height="1" width="40" style="font-size: 1px; line-height: 1px; width:40px;">&nbsp;<!--<img src="img/spacer.png" alt="spacer" width="1" height="1">--></td>
                                                         <!-- margin -->
                                                         <!--<td bgcolor="#ffffff" width="140" height="40" style="font-family:"Raleway", Open Sans, sans-serif; font-size:16px; font-weight:500; text-align:center; color:#000000; border-radius:5px;" data-bgcolor="s1_button_bg">
                                                            <a href="#" style="text-decoration:none; color:#000000;" data-size="s1_btn2_text_size" data-min="12" data-max="36" data-color="s1_btn2_text_color" mc:edit="s1_b2">
                                                            Mobile app
                                                            </a>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                          <!-- margin -->
                                          <tr>
                                             <td height="15" width="2" style="font-size: 2px; line-height: 15px; height:15px;">&nbsp;
                                                <!--<img src="img/spacer.png" alt="spacer" width="1" height="1">-->
                                             </td>
                                          </tr>
                                          <!-- margin -->
                                         
                              <tr>
                                 <td height="40" width="1" style="font-size: 1px; line-height: 8px; height:40px;">&nbsp;<!--<img src="img/spacer.png" alt="spacer" width="1" height="1">-->
                                 </td>
                              </tr>
                              <!-- margin -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table> 
<!-- section_11 -->



<!-- ================================================================================================================================ -->


 

<!-- section_15 -->
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#fff;" data-bgcolor="s20_bg_main" style="table-layout:fixed;margin:0 auto; border-collapse:collapse; border: 0px; max-width:800px;border-top:2px solid #f25f00;background:#fff;" data-module="section_15" data-thumb="thumbnails/s15.png">
    <tbody>
      <tr mc:repeatable="">
         <td align="center" style="min-width:100%;margin:0 auto; background: url(img/s15_bg.jpg) center center / cover no-repeat;" data-bg="s15_bg_img">
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0" class="container_wrap"  style="table-layout:fixed; margin:0 auto; border-collapse:collapse; border: 0px;">
               <tbody>
                  <!-- margin -->
                  <tr>
                     <td height="15" width="1" style="font-size: 1px; line-height: 15px; height:15px;">&nbsp;<!--<img src="img/spacer.png" alt="spacer" width="1" height="1">--></td>
                  </tr>
                  <!-- margin -->
                  <!-- title -->
                  <tr>
                     <th class="container_wrap" width="280" align="left">
                        <table class="container_wrap" width="280" align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;">
                           <tbody>
                              <tr>
                                 <td class="title" style="font-family: "Raleway", sans-serif; font-weight:400; font-size: 14px; line-height:24px; text-align:left; color: #fff;" data-size="s15_copyright_size" data-min="12" data-max="36" data-color="s15_copyright_color" mc:edit="s15_cpright"> 
                                 </td>
                              </tr>
                              <!-- margin -->
                              <tr>
                                 <td height="15" width="1" style="font-size: 1px; line-height: 15px; height:15px;">&nbsp;<!--<img src="img/spacer.png" alt="spacer" width="1" height="1">--></td>
                              </tr>
                              <!-- margin -->
                           </tbody>
                        </table>
                     </th>
                     <th class="container_wrap" width="280" align="right">
                        <table class="container_wrap" width="280" align="right" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;">
                           <tbody>
                              <tr>
                                 <td align="right" class="title" >
                                    <a href="#" style="text-decoration:none;font-family: "Raleway", sans-serif; font-weight:400; font-size: 14px; line-height:24px; text-align:right; color:#f25f00;" data-size="s15_unsubscribe_size" data-min="12" data-max="36" data-color="s15_unsubscribe_color" mc:edit="s15_unsubscribe">2017 Banca | All Rights Reserved</a> 
                                 </td>
                              </tr>
                              <!-- margin -->
                              <tr>
                                 <td height="15" width="1" style="font-size: 1px; line-height: 15px; height:15px;">&nbsp;<!--<img src="img/spacer.png" alt="spacer" width="1" height="1">--></td>
                              </tr>
                              <!-- margin -->
                           </tbody>
                        </table>
                     </th>
                  </tr>
                  <!-- title -->
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- section_15 -->


 <!-- ================================================================================================================================ -->


</body></html>'; 
  $headers='From:banca@gmail.com';
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
	  
    $msg=4;
  }
  else
  {
   $msg=5;
  }
 }
 else
 {
  $msg=6;
 }
}
?>

<script>

msg="<?php echo $msg?>";
if(msg==4)
{
   alert("Check your inbox in mail");
  
}
 if(msg==5)
 {
   
  alert("mail is not send");
 }
 if(msg==6)
 {
  alert("You entered mail id is not present");
 }

</script>


<script>
function check_email(val)
{
   $.post("<?php echo base_url()?>admin/check_email",
         {
           email:val
         },
          function(data)
          {
               if(val!="")
               {
              if(data==1)
               {
                   $('#valid_email').val("");
                   $('#success-notify').text("Email id already exist !").removeClass('alert-success').addClass("alert-danger").show(1000).delay(4000).fadeOut("slow");       

                 }
                 }
          });
}
function ValidateEmail(user_email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(user_email.value.match(mailformat))
{
document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}
</script>
