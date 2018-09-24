<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ExcelDataInsert extends CI_Controller
{

public function __construct() {
        parent::__construct();
                $this->load->library('excel');//load PHPExcel library 
                $this->load->model('excel_data_insert_model');
}	
	
public	function ExcelDataAdd()	{  
//Path of files were you want to upload on localhost (C:/xampp/htdocs/ProjectName/uploads/excel/)	 
         $configUpload['upload_path'] = FCPATH.'uploads/excel/';
         $configUpload['allowed_types'] = 'xls|xlsx|csv';
         $configUpload['max_size'] = '5000';
         $this->load->library('upload', $configUpload);
         $this->upload->do_upload('userfile');	
         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
         $file_name = $upload_data['file_name']; //uploded file name
		 $extension=$upload_data['file_ext'];    // uploded file extension
		
//$objReader =PHPExcel_IOFactory::createReader('Excel5');     //For excel 2003 
 $objReader= PHPExcel_IOFactory::createReader('Excel2007');	// For excel 2007 	  
          //Set to read only
          $objReader->setReadDataOnly(true); 		  
        //Load excel file
		 $objPHPExcel=$objReader->load(FCPATH.'uploads/excel/'.$file_name);		 
         $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();   //Count Number of rows avalable in excel      	 
         $objWorksheet=$objPHPExcel->setActiveSheetIndex(0);                
          //loop from first data untill last data
          for($i=2;$i<=$totalrows;$i++)
        {
              $question= $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();			
              $opt1= $objWorksheet->getCellByColumnAndRow(1,$i)->getValue(); //Excel Column 1
			  $opt2= $objWorksheet->getCellByColumnAndRow(2,$i)->getValue(); //Excel Column 2
			  $opt3=$objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); //Excel Column 3
			  $opt4=$objWorksheet->getCellByColumnAndRow(4,$i)->getValue(); //Excel Column 4
			  $correct_opt=$objWorksheet->getCellByColumnAndRow(5,$i)->getValue(); //Excel Column 5


			  $data_user=array('question'=>$question, 'opt1'=>$opt1 ,'opt2'=>$opt2 , 'opt3'=>$opt3 , 'opt4'=>$opt4 , 'correct_opt'=>$correct_opt  );
			  $this->excel_data_insert_model->Add_User($data_user);
              
		}
            	$this->session->set_flashdata('success', 'Your File Is Inserted Successfully'); 
				$this->load->view('uploadfile');
	           
       
     }
	
}
?>