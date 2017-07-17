<?php 
class Admin extends CI_Controller 
{
	
	public function __construct()
	    {
		 parent::__construct();
	 	 $this->load->model("Adminmodel","",TRUE);
		 
		}

	public function index()
	{
	    $data['title']="index";
		$data['view_file']="home";
		$this->load->view('layout',$data);

	}

	public function login()
    {
	   if($this->input->post('login'))
	  {
	  	        $username=$this->input->post('email');
				$password=$this->input->post('password');
			$q = $this->db->where(['email'=>$username,'password'=>md5($password)])
			      		  ->get('users');
			if($q->num_rows())
			{
			   	$username= $q->row()->email;
			 	$id= $q->row()->id;
			if($username)
			 {
				$this->session->set_userdata('is_login',$id);
				redirect('admin/dashboard');
			 }
			}
		   else
		   {
		   	$this->session->set_flashdata('loginfail' ,'Invalid Username/Password');
        	redirect('admin/login');
		    //$data['msg']="1";
		   }
  		}

   $data['title']="login";
   $data['view_file']="login";
   $this->load->view('layout',$data);
		
 }


 public function register_user()
  {
 
   $this->form_validation->set_rules('email', 'email ', 'required');
   $this->form_validation->set_rules('password', 'password ', 'required');
   
   if ($this->form_validation->run() == FALSE)
                {
                    $data['view_file']="register";
   		     		$this->load->view('layout',$data);
		 
                }
                else
                { 
     $data = array(
      'email' => $this->input->post('email') ,
      'password' => md5($this->input->post('password')),
      );
         
        $this->load->model('Userfmodel','adminmodel');
        $articles['type'] =$this->adminmodel->registerlistmodel();
        if($this->adminmodel->add_usermodel($data))
       {
       	$this->session->set_flashdata('register', 'Registered Sucessfully!! Please Login');
         redirect('admin/login'); 
       } 
       else{
       	$this->session->set_flashdata('registerfail' ,'Register Failed Please try again');
        
          // $data['msg']="1";
        }
     }
                
  }

  public function profile($id)
 {
  $data['rec']=$this->db->where('id',$this->session->userdata('is_login'))->get('users')->row();
	  $data['title']="profile";
	  $data['view_file']="profile";
	  $this->load->view('layout1',$data);
	 //redirect('admin/login');
		
  if($this->input->post('submit'))
  {
   $this->Adminmodel->edit_profile($id);
   redirect('admin/dashboard');
   $data['msg']="1";
  }
       
 }

  public function Forgotten_Password()
 {
	 
  $data['title']="Forgotten Password";
  $data['view_file']="forgot-password";
   	 $this->load->view('layout',$data);
	
 }

public function logout()
	{
	   		$this->session->unset_userdata('is_login'); 
            $this->session->sess_destroy();
           session_destroy();
           redirect('admin/index'); 
	}
	
	//email check
 public function check_email()
         {
              $email=$this->input->post('email');
               $this->db->where("email",$email);
               $no=$this->db->get('users')->num_rows(); 
                echo $no;
         }

    public function changepassword()
	{
		$data['title']="index";
		$data['view_file']="change-password";
		$this->load->view('layout1',$data);
	}     
	
 public function dashboard()
         {

         	$data['title']="Dashboard";
 			$data['view_file']="dashboard";
  		 	$this->load->view('layout1',$data);

			}
 


}


