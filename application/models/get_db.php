<?php

	class Get_db extends CI_Model{
		function getAll(){
			$query=$this->db->query("SELECT * FROM test");
			return $query->result();
		}
		
		function insert1($data){
						
			$this->db->insert("test",$data);
			
			
		}
		
		function insert2($data){
			$this->db->insert_batch("test", $data);
			
		}
		
		function update($data){
			$this->db->update("test",$data,"id=2");
				
		}
		function update2($data){
			$this->db->update_batch("test",$data,"id");
		}
	}