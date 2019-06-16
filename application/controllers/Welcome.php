<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('String');
		$this->load->model('data_model');		
		
	}
	public function index()
	{
		$this->load->view('login');
	}


	public function login()
	{
		$nim=$this->input->get_post('nim');
		$pass=$this->input->get_post('pass');

		$result=$this->data_model->user($nim ,$pass)->result_object();

		if ( $result != null ) {
			$_SESSION['nim']=$nim;			
			redirect(base_url().'/Welcome/input/');					 
		}else{
			echo"<script type='text/javascript'>
				alert('Cek NIM dan Password anda');
			</script>';";
			redirect(base_url(),'refresh');
			
		}


	}

	public function input()
	{
		$data['kanan']='input_rusak';
    	$this->load->view('main',$data);
	}

	public function kirim()

	{	
		$des=$this->input->get_post('deskrip');
		$ruang=$this->input->get_post('ruang');
		$date=$this->input->get_post('tgl');		
		$nim = $_SESSION['nim'];
		
		$namafile=$_FILES['poto']['name'];
		$nametmp=$_FILES['poto']['tmp_name'];
		$folder='./aset/images/upload/';
		move_uploaded_file($nametmp,$folder.$namafile);


		$kirim = $this->data_model->lapor($date,$ruang,$des,$nim,$namafile);
		
		if ($kirim) {
			
			redirect(base_url().'Welcome/list_data/');
			
		}else{
		echo $des;
		echo $ruang;
		echo $date;
		echo $_SESSION['nim'];
		}

	}




	public function list_data()
	{
		 $data['kanan']='data_rusak';
		 $data['member']=$this->data_model->data_rusak()->result_object();
         $this->load->view('main',$data);
	}

	public function logout()
	{
		
	session_destroy();	
	redirect(base_url());
		

	}

	public function hapus()
	{
		$key = $this->uri->segment(3);

		$run=$this->data_model->del_laporan($key);

		if ($run) {
			
			
			redirect(base_url().'/Welcome/list_data/');
			
		}else{
			var_dump($run);
		}
		
	}





}
