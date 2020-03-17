<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('form_cek');
	}
	public function cek(){
    $this->form_validation->set_rules('nama','Nama','required|alpha');
		$this->form_validation->set_rules('nim','Nim','required|min_length[4]|numeric');

    if($this->form_validation->run() != false){
      $nim = $this->input->post('nim');
      $nama = $this->input->post('nama');
			// if(($nama == 'andi'&&$nim=='1234')||$nama=='budi' && $nim=='4321'||$nama=='citra' && $nim='7890'){
				if($nama == 'andi'&&$nim=='1234'){
					$array['nama']=$nama;
					$array['nim']=$nim;
					$array['tgl']='21-02-1997';
					$array['alamat']='Bandung';
					$array['ipk']='3,5';
					$this->load->view('hasil',$array);
				}else if($nama=='budi' && $nim=='4321'){
					$array['nama']=$nama;
					$array['nim']=$nim;
					$array['tgl']='21-04-1998';
					$array['alamat']='Cimahi';
					$array['ipk']='3,1';
					$this->load->view('hasil',$array);
				}else if($nama=='citra' && $nim='7890'){
					$array['nama']=$nama;
					$array['nim']=$nim;
					$array['tgl']='14-02-1996';
					$array['alamat']='Padalarang';
					$array['ipk']='2,81';
					$this->load->view('hasil',$array);
				}else{
					echo 'nama atau nim tidak valid';
					$this->load->view('form_cek');
				}
    }else{
			$this->load->view('form_cek');
		}

	}
}
?>
