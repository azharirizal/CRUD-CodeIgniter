<?php

/**
* 
*/
class C_mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
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
			$data['jumlah_data'] = $this->m_mahasiswa->jumlah_data();
			$data['mahasiswa'] = $this->m_mahasiswa->read();
			$data['jenis'] = "DataMahasiswa";
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

	function create()
	{
		$data = array();
	    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
	    if($session!=""){
		    $pisah_info = explode("|", $session);
		    $data['username'] = $pisah_info[0];
		    $data['nama'] = $pisah_info[1];
		    $data['profil'] = $pisah_info[2];
			$data['jenis'] = "TambahMahasiswa";
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

	function save()
 	{
		$this->m_mahasiswa->save();
		redirect('c_mahasiswa','refresh');
 	}

 	function edit($id)
 	{
 		$data = array();
	    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
	    if($session!=""){
		    $pisah_info = explode("|", $session);
		    $data['username'] = $pisah_info[0];
		    $data['nama'] = $pisah_info[1];
		    $data['profil'] = $pisah_info[2];
		  	$data['m']= $this->m_mahasiswa->edit($id);
		  	$data['jenis'] = "UbahMahasiswa";
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

 	function update()
 	{
		$this->m_mahasiswa->update();
		redirect('c_mahasiswa','refresh');
 	}

 	function delete($id)
 	{
  		$this->m_mahasiswa->delete($id);
  		redirect('c_mahasiswa','refresh');
 	}
}

?>