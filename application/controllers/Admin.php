<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Admin extends CI_Controller {
      //functions  
	  	function __construct(){
		parent::__construct();
		
		 $this->load->library('session');
		$this->load->helper('url');

			}
			public function index()//load index view
	{	
      
			$this->load->view('login');
	}
public function adprofile()//profile settings of admin 
	{

		$this->load->model("admin_model"); //load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
		$data["users"]=$this->admin_model->adprofile();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('currentpass','Old Password','required');
		$this->form_validation->set_rules('password','New Password','required');
		$this->form_validation->set_rules('Confirm','Retype Password','required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{  
		$this->load->view('profile',$data);
		}
		else
		{	
			if( $this->admin_model->adpass())
			{
				$this->session->set_flashdata('success', 'password changed successfully');  
				$this->load->view('profile',$data);
			}
			else
			{ 
				$this->session->set_flashdata('success', 'old password is incorrect'); 
				$this->load->view('profile',$data);
			}
		}
	}
	public function adpasschange()//forgot password for admin
	{

		$this->load->model("admin_model"); //load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password','New Password','required');
		$this->form_validation->set_rules('Confirm','Retype Password','required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{  
		$this->load->view('reset-password.php');
		}
		else
		{	
			if( $this->admin_model->forgotchange())
			{
				$this->session->set_flashdata('success', 'password changed now you can successfully login');  
				$this->load->view('reset-password.php');
			}
			
		}
	}
public function updateprofile()//for update email address of admin 
	{
		$this->load->model("admin_model"); // we load the model that we saved in the application/models folder, so that the controller will know where to get the methods from
		$this->admin_model->updateprofile();
		$this->session->set_flashdata('updateprofile', 'Email Changed successfully');  
		$data["users"]=$this->admin_model->adprofile();
		$this->load->view('profile',$data);
	}

	public function upload()//upload excel file 
	{
		$this->load->view('uploadfile.php');
	}
public function resetpassword()//reset password view 
	{
		$this->load->view('reset-password.php');
	}
public function forgotpass()//forgot password of admin
	{
		if($this->input->post('forgotpass'))
		{
			$email=$this->input->post('email');
			$query = $this->db->query('select id,email from admin where email="'.$email.'"');
			$res= $query->row_array();
			$id=$res['id'];
			if($query->num_rows() > 0)
			{	
// $this->load->library('email'); //Load the library
// $config['protocol']    = 'smtp';

// $config['smtp_host']    = 'ssl://smtp.gmail.com';

// $config['smtp_port']    = '465';

// $config['smtp_timeout'] = '7';

// $config['smtp_user']    = 'yourpassword';

// $config['smtp_pass']    = 'yourpassword';

// $config['charset']    = 'utf-8';

// $config['newline']    = "\r\n";

// $config['mailtype'] = 'text'; // or html

// $config['validation'] = TRUE; // bool whether to validate email or not      

// $this->email->initialize($config);
// $this->email->to($email);
// $this->email->from('er.rashmisharma1998@gmail.com','Quiz');
// $this->email->subject('Password reset');
// $this->email->message('click on this link to change your password- http://quiz.jaipurorganic.com/admin/resetpassword');
// $this->email->send();

				//Mail Code
				$to = $email;
				$subject = "Password";
				$txt = "click on this link to change your password- http://localhost/quizadmin/admin/resetpassword";
				$headers = "From: er.rashmisharma1998@gmail.com" . "\r\n" .
				"CC: er.rashmisharma1998@gmail.com";
				mail($to,$subject,$txt,$headers);
				$this->session->set_flashdata('sendmail', 'Password Recovery Mail is Sent To Your gmail account,click on the link to reset your password.');
			}
			else
			{
				$data['error']="
				Invalid Email ID !
				";
			}
		}
		$this->load->view('forgot-password',@$data);	

	}
public function adindex()//dashboard of admin after successfully login
	{
		$this->load->view('index');
	}
public function adforgotpassword()//forgot password for admin 
	{
		$this->load->view('forgot-password');
	}
public function addquestions()//add question view
	{
		$this->load->view('addqus');
	}
public function question()//total questions 
	{
		$this->load->model('admin_model');  
		$data['h']=$this->admin_model->question(); 
		$this->load->view('qus',$data);
	
	}




public function editquestion($id)//edit question view
	{
		$this->load->model('admin_model');  
		$this->data['h']=$this->admin_model->editquestion($id); 
		$this->load->view('editqus', $this->data);
	}
	  

public function updatequestion($id)//update question
	{
		$this->load->model('admin_model');  
		$this->data['h']=$this->admin_model->updatequestion($id); 
		$this->session->set_flashdata('updatequs', 'Question Updated Sucessfully.');
		redirect('Admin/question');
	}





function login() //login view 
    {  		
		$data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
		$this->load->view("login", $data);  
	}  
function logout() //admin logout
	{  
        $this->session->unset_userdata('username');  
		$this->load->view('login');
    }  



public function deletequestion($id = '') //delete question
	{
		$this->session->set_flashdata('question', 'question deleted Sucessfully.');
		$this->load->model('admin_model');
		$where = array('id' => $id); 
		$this->admin_model->deletequestion('questions',$where);
		$data['h']=$this->admin_model->question();  
		$this->load->view('qus',$data);
	}


	 

function addquestion()//add question
	{		
			$this->load->library('session');
			$this->load->library('form_validation');  
			$this->form_validation->set_rules('Question', 'Question', 'required');  
			$this->form_validation->set_rules('option1', 'option1', 'required');  
			$this->form_validation->set_rules('option2', 'option2', 'required');  
			$this->form_validation->set_rules('option3', 'option3', 'required');  
			$this->form_validation->set_rules('option4', 'option4', 'required');  
			$this->form_validation->set_rules('Correct', 'Correct', 'required');  

																		
			if($this->form_validation->run()==FALSE)
			{  
				$this->load->view("addqus");
			}
			else
			{	
				$this->load->model('admin_model');
				$result=$this->admin_model->addquestion(); 
				$this->session->set_flashdata('addquestion', 'question Created successfully.');
				$this->load->view("addqus");
			}

	}
	function downloadfile(){

        $yourFile = "book.xlsx";
        $file = @fopen($yourFile, "rb");

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=question.xlsx');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($yourFile));
        while (!feof($file)) {
            print(@fread($file, 1024 * 8));
            ob_flush();
            flush();
        }
}
function login_validation() //when correct username and password is correct user is logged in 
      {  		

		$this->load->helper('url');
		
			$this->load->library('session');
			$this->load->library('form_validation');  
			$this->form_validation->set_rules('username', 'username', 'required');  
			$this->form_validation->set_rules('password', 'password', 'required');  
			if($this->form_validation->run())  
			{  
				//true  
				$username = $this->input->post('username');  
				$password = $this->input->post('password');  
				//model function  
				$this->load->model('admin_model');  
				if($this->admin_model->can_login($username, $password))  
				{  
					$session_data = array(  
					'username'     =>     $username  
					);  
					$this->session->set_userdata($session_data);  
					$this->load->view('index');
				} 
				else  
				{  
					$this->session->set_flashdata('error', 'Invalid Username and Password');  
					$this->load->view('login');
				}  
			}  
			else  
			{  
				//false  
				$this->login();  
			}  
      }
}  