<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class mainFunction extends CI_Controller {

    	public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('date');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
		  $this->load->model('j3databox');
     

     }
	  	public function post_receiver()
	{
           
		    $this->load->view('post_receiver');
	}
	 	public function index()
	{
			$data['group_Id'] = $this->j3databox->get_group_Id();
			$data['popup'] = $this->j3databox->get_popup();
			$data['databox_upload'] = $this->j3databox->get_index();
		    $data['unit'] =  $this->j3databox->get_unit();
		    $this->load->view('home',$data);
	}

			public function databox_detail()
	{
		    $data['databox_detail'] = $this->j3databox->get_databox_detail();
		    $data['box'] = $this->j3databox->get_executive();
		    $this->load->view('databox_detail',$data);
	}
	public function search()
	{       
			$data['search'] = $this->j3databox->get_search();
     	    $this->load->view('search', $data);
	}

	
	//บทสรุปผู้บริหาร
		public function executive()
	{           $data['submenu'] = $this->j3databox->get_submenu();
			    $data['menu'] = $this->j3databox->get_classified();
				$data['box'] = $this->j3databox->get_box();
				$this->load->view('box',$data); 
	}
	//ปฏิบัติการ
		public function strategic()
	{

				$data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_executive();
				$this->load->view('box',$data);
           
	}
		public function operate()
	{

				$data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_operate();
				$this->load->view('box',$data);
        

	}
			public function databox_popup()
	{          
				$data['box'] = $this->j3databox->get_databox_popup();
				$this->load->view('databox_popup',$data);
	}


	public function training()
	{

				$data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_training();
				$this->load->view('box',$data);
          
	}
	public function peace()
	{
				$data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_peace();
				$this->load->view('box',$data);
           
	}

		public function budget()
	{
				$data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_budget();
				$this->load->view('box',$data);
         
	}
			public function processed()
	{
			    $data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_processed();
				$this->load->view('box',$data);
            
	}
			public function midfielder()
	{
				$data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_midfielder();
				$this->load->view('box',$data);
           
	}
			public function finance()
	{
                $data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_finance();
				$this->load->view('box',$data);
           
	}
				public function etc()
	{

                $data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_etc();
				$this->load->view('box',$data);
            
	}
			public function center()
	{
				$data['menu'] = $this->j3databox->get_menu();
				$data['box'] = $this->j3databox->get_center();
				$this->load->view('box',$data);
           
	}

	/*
		public function strategic()
	{
		  $data['strategic'] = $this->j3databox->get_strategic();
          $this->load->view('strategic',$data);

	}
		public function jointplat()
	{
		  $data['jointplat'] = $this->j3databox->get_strategic();
          $this->load->view('jointplat',$data);

	}
		public function joinplat()
	{
		  $data['strctu'] = $this->j3databox->get_strategic();
          $this->load->view('strategic',$data);

	}
  */


     public function login()  //ต้องencrypt session ด้วยนะ
     {
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {

                    $sessiondata = array(
                              'username' => $username,
                              'password' => $password);

                    ldap_login($username,$password,"mainFunction/upload");
                    //check if username and password is correct
                    

               }
               else
               {
                    redirect('mainFunction/login');
               }
          }

          
     }


  
	function do_upload()
	{
		$config['upload_path'] = 'application/uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf';
		$config['max_size']	= '1000';
		$config['max_width']  = '102400';
		$config['max_height']  = '76800';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$data['menu_classified_sub'] = $this->j3databox->get_classified_sub();
			$data['upload_menu_sub'] = $this->j3databox->get_menu_sub();
			$data['upload_menu_type'] = $this->j3databox->get_upload_menu_type();
			$data['upload_menu'] = $this->j3databox->get_upload_menu();
			$data['upload'] = $this->j3databox->get_upload();
            $this->load->view('page_upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
             
			
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
            	$data['menu_classified_sub'] = $this->j3databox->get_classified_sub();
			    $data['upload_menu_sub'] = $this->j3databox->get_menu_sub();
				$data['upload_menu_type'] = $this->j3databox->get_upload_menu_type();
				$data['upload_menu'] = $this->j3databox->get_upload_menu();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
			
		}
	}
	
 /*
	public function upload()
     {
          if(ldap_check($this->session->userdata('logged_in')["username"],$this->session->userdata('logged_in')["password"]))
           {

                $this->load->view('upload');  //ใช้หน้าของพี่นะ
               
            }
            else
               {
                //If no session, redirect to login page
                redirect('mainFunction/login', 'refresh');
               }

     }
  */

 
  
    public function page_upload()
     {          
		     
			    $data['menu_classified_sub'] = $this->j3databox->get_classified_sub();
			    $data['upload_menu_sub'] = $this->j3databox->get_menu_sub();
				$data['upload_menu_type'] = $this->j3databox->get_upload_menu_type();
				$data['upload_menu'] = $this->j3databox->get_upload_menu();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
              
     }
	 
	  public function upload_menu()
     {
		  		$data['upload_menu_type'] = $this->j3databox->get_upload_menu_type();
				$data['upload_menu'] = $this->j3databox->get_upload_menu();
                $this->load->view('upload_menu',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
              
     }
	public function upload_file()
    {          
				
                $this->load->view('upload_file');  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
              
    }
	

    public function save()
     {          
			    $check = $this->input->post("check");
				$databox_id = $this->input->post("databox_save");
			    $databox_data=array(
				"subject"=> $this->input->post("subject_save"),
				"databox_search"=>$this->input->post("databox_search_text_save"),
				);
				
				 
				if($check!="save"){
				$this->db->where('databox_id', $databox_id);
				$this->db->delete('databox_upload'); 
			
				}
					
				if($check=="save"){
			    $this->db->where('databox_id', $databox_id);
			    $this->db->update('databox_upload', $databox_data); 
		
				 }
				$data['upload_menu_type'] = $this->j3databox->get_upload_menu_type();
				$data['upload_menu'] = $this->j3databox->get_upload_menu();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
				
			
				
     }
	  public function menu_save()
     {          
		        

				$menu_sub = $this->input->post("menu_sub");
			   if($menu_sub!=""){
				$add_classified=array(
			    "class_id"=>$this->input->post("menu_second_show"),
                "sub_name"=>$this->input->post("menu_sub"),
				);
		
			    $this->db->insert('classified_sub',$add_classified);
	             }

			    $class_name = $this->input->post("menu_second");
			   if($class_name!=""){
				$add_classified=array(
			    "type_id"=>$this->input->post("menu_master"),
                "class_name"=>$this->input->post("menu_second"),
                 );
		
			    $this->db->insert('classified',$add_classified);
	             }

			    $haed = $this->input->post("comment");
				if($haed!=""){
			    $databox_data=array(
				"url"=>$this->input->post("haed"),
				);
				$this->db->where('class_name', $haed);
			    $this->db->update('classified1', $databox_data); 

			   
				}
				$data['menu_classified'] = $this->j3databox->get_classified();
				$data['select_menu'] = $this->input->post("menu_master_show");
                $data['upload_menu_sub'] = $this->j3databox->get_menu_sub();
				$data['upload_menu_type'] = $this->j3databox->get_upload_menu_type();
				$data['upload_menu'] = $this->j3databox->get_upload_menu();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
     }
	 				




}
