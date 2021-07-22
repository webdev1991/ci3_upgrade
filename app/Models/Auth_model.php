<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model{
	
	public function create($formArray){
		$this->db->insert('form',$formArray);
	}
}


