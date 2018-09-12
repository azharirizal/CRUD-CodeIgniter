<?php

/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{
		$data = array();
	    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
	    if($session!=""){
		    $pisah_info = explode("|", $session);
		    $data['username'] = $pisah_info[0];
		    $data['nama'] = $pisah_info[1];
		    $data['profil'] = $pisah_info[2];
			$data['jenis'] = "Beranda";
	    	$this->load->view('ui', $data);
	    }
		else{
      ?>
        <script type="text/javascript" language="javascript">
		  alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
		</script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."home/login_user'>";
      }
	}

	function login_user()
	{
		$data = array();
	    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';

	    if ($session!=""){
	      echo "<meta http-equiv='refresh' content='0; url=".base_url()."home'>";
	    }
	    else{
	      $this->load->view('login');
	    }
	}

	function login()
	{
		$username = $this->input->post('username');
	    $password = $this->input->post('password');
	    $hasil = $this->m_login->cekdb();
	    
	    if (count($hasil->result_array())>0){
	      foreach($hasil->result() as $row){
	        $sess_user = $row->username."|".$row->nama."|".$row->profil;
	      }
	      $_SESSION['user_data']=$sess_user;
	      echo "<meta http-equiv='refresh' content='0; url=".base_url()."home'>";
	    }
	    else{
	    ?>
		  <script type="text/javascript">
		    alert("Username atau Password Yang Anda Masukkan Salah..!!!");
	      </script>
		<?php
	   echo "<meta http-equiv='refresh' content='0; url=".base_url()."home/login_user'>";
	    }
	}

	function logout()
	{
		session_destroy();
    	echo "<meta http-equiv='refresh' content='0; url=".base_url()."home/login_user'>";
	}
}

?>