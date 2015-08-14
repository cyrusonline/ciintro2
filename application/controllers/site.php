<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function  index(){
	
		$this->home();
	
	}
	
	
	
	public function  home(){
		$data['title'] = "Welcome!";
		$data['var1'] = 2;
		$data['var2'] = 8;
		$this->load->model("math");
		$data['addTotal']=$this->math->add($data['var1'],$data['var2']);
		$data['subTotal']=$this->math->sub($data['var1'],$data['var2']);
		$this->load->view("view_home",$data);
	}
	
	
	function about(){
		$data['title'] = "About";
		$this->load->view("view_about",$data);
	}
	
	
	
	
	
	public function addStuff(){
		$this->load->model("math");
		echo $this->math->add(2,2);
		
	}
	
	function getValue(){
		$this->load->model("get_db");
		$data['results']= $this->get_db->getAll();
		$this->load->view("view_db",$data);
		
	}
	
	function insertValues(){
		$this->load->model("get_db");
		$newRow = array(
			array(
					
					"name"=>"Sue"
					
			),
				array(
							
						"name"=>"Dylan"
			
				)
				
				
				
			
		);
		
		$this->get_db->insert2($newRow);
		echo "added";
		
	}
	
	function updateValues(){
		$this->load->model("get_db");
		
		$newRow = array(
				array(
					"id"=>"3","name"=>"cyrus"
						
				),
				array(
						"id"=>"5","name"=>"WONG"
				
				)
		);
		$this->get_db->update2($newRow);
		
		echo "updated";
		
		
	}
	

	function deleteValues(){
		$this->load->model("get_db");
	
		
	
	
	}
}