<?php  
   class Admin_model extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      } 
function can_login($username, $password) //matching pass and username to admin login 
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('admin');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
function adprofile()// retrive username and email on admin profile view
	{
		$this->db->select('username,email');
		$q = $this->db->get('admin');
		if($q->num_rows() > 0)
		{
		// we will store the results in the form of class methods by using $q->result()
		// if you want to store them as an array you can use $q->result_array()
		foreach ($q->result() as $row)
		{
		$data[] = $row;
		}
		return $data;
		}
	}







public function deletequestion($table, $where = array()) //delete question by id 
	{
		$this->db->where($where);
		$res = $this->db->delete($table); 
		if($res)
		return TRUE;
		else
		return FALSE;
	}


function addquestion()//add question 
	{ 
		$Question=$this->input->post('Question');
		$option1=$this->input->post('option1');
		$option2=$this->input->post('option2');
		$option3=$this->input->post('option3');
		$option4=$this->input->post('option4');
		$Correct=$this->input->post('Correct');
		$field = array(
		'question'=>$Question,
		'opt1'=>$option1,
		'opt2'=>$option2,
		'opt3'=>$option3,
		'opt4'=>$option4,
		'correct_opt'=>$Correct
		);
		$this->db->insert('questions', $field);
		if($this->db->affected_rows() > 0){
		return true;
		}else{
		return false;
		}
	}
public function question()  //retrive total question
	{  
		//data is retrive from this query  
		$query = $this->db->get('questions');  
		return $query->result_array();      
	} 

public function editquestion($id)  //fetch question from db by id
	{  
		//data is retrive from this query  
		$query = $this->db->query("SELECT * FROM questions WHERE id='$id'");
		$result = $query->result_array();
		return $result; //return as object array
	} 
	
public function updateprofile()  //update profile of admin 
	{   
		$email=  $this->input->Post('email');
		$data = array(
		'email' => $email

		);
		$this->db->update('admin', $data);
		$query = $this->db->get('admin'); 
		$result = $query->result();
		return $result; 

	}
public function updatequestion($id)  //update question by id 
	{  
		$Question=$this->input->post('Question');
		$option1=$this->input->post('option1');
		$option2=$this->input->post('option2');
		$option3=$this->input->post('option3');
		$option4=$this->input->post('option4');
		$Correct=$this->input->post('Correct');
		$field = array(
		'question'=>$Question,
		'opt1'=>$option1,
		'opt2'=>$option2,
		'opt3'=>$option3,
		'opt4'=>$option4,
		'correct_opt'=>$Correct
		);

		$this->db->where('id', $id);
		$this->db->update('questions', $field);
		$query = $this->db->get('questions'); 
		$result = $query->result();
		return $result; //return as object array		     
	} 

public function adpass()// change password of admin 
	{
		$column_id_value=$this->session->userdata('username');
		$value=  $this->input->Post('password');
		$value1=  $this->input->Post('currentpass');
		$this->db->where('username', $column_id_value);
		$query = $this->db->get('admin');
		$row    = $query->row();
		$row = $query->row();
		if($value1 == $row->password)
		{
			$this->db->set('password', $value); //value that used to update column  
			$this->db->where('username', $column_id_value); //which row want to upgrade  
			$this->db->update('admin');
			return true;
		}
		else
			$this->form_validation->set_message('adpass', 'wrong old password.');        return false;
	}
	public function forgotchange()// forgot password of admin 
	{
		$value=  $this->input->Post('password');
		$query = $this->db->get('admin');
		$row    = $query->row();
		$row = $query->row();
		
			$this->db->set('password', $value); //value that used to update column  
			
			$this->db->update('admin');
			return true;
		}
		
	
}  
?>  