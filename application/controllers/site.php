<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function  index(){
		echo "Hi internet";
		$this->hello();
	}
	
	
	public function  hello(){
		echo "something else";
	}

}