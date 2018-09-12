<?php

/**
* 
*/
class M_login extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function cekdb()
	{
		$username = $this->input->post('username');
	    $password = MD5($this->input->post('password'));
	    
	    $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
	    return $query;
	}
}

?>