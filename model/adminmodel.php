<?php

class Adminmodel extends CI_Model
{

//profile
 public function edit_profile($id)
 {
  if($_FILES["profile_image"]["name"]!="" and (!empty($_FILES["profile_image"]["name"]))) 
  {
  
     $filename=uniqid();
     $path_info = pathinfo($_FILES["profile_image"]["name"]);
     $fileExtension = $path_info['extension'];
     $config['upload_path'] = './FileUpload/user_profile/';
     $config['allowed_types'] = 'gif|jpg|png|jpeg';
     $config['file_name'] = $filename.".".$fileExtension;
     $this->load->library('upload', $config);
     $this->upload->initialize($config);
     $this->upload->do_upload('profile_image');
     $save1=array(
        
      "name" => $this->input->post('name'),
      "last_name" => $this->input->post('last_name'),
      "email" => $this->input->post('email'),
      "mobile" =>$this->input->post('mobile'),
      
      "address" => $this->input->post('address'),
      
      "profile_image" => $filename.".".$fileExtension
      
      );
      
  }
  else{
     $save1=array(
         
      "name" => $this->input->post('name'),
      "last_name" => $this->input->post('last_name'),
      "email" => $this->input->post('email'),
      "mobile" =>$this->input->post('mobile'),
      
      "address" => $this->input->post('address')
      
      );
     
    }
      
      $this->db->where('id',$id);
      $this->db->update('users',$save1);
  
 }

















	
}