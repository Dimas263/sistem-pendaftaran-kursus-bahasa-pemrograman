<?php
class Data_m extends CI_Model{
	public function addkursus(){
		$directoryName = './upload/krs/';
		/* Check if the directory already exists. */
		if (!is_dir($directoryName)) {
			/* Directory does not exist, so lets create it. */
			mkdir($directoryName, 0755);
		}
		$config['upload_path'] = $directoryName;
		$config['allowed_types'] = 'jpeg|jpg|png|pdf';
		$config['max_size'] = 2048;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('example-file-input-krs'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('source/home', $error);
		}
		else
		{
			$data_krs = array('image_metadata' => $this->upload->data());
			$nama_krs = $this->upload->data('file_name');

		}

		$data = [
			'nama' => $_POST['wizard-progress-info-nama'],
			'npm' => $_POST['wizard-progress-jenis-npm'],
			'kelas' => $_POST['wizard-progress-jenis-kelas'],
			'nama_kursus' => $_POST['wizard-progress-info-kursus'],
			'berkas_krs' => $nama_krs,
			'status_kursus' => 'unverifikasi'
		];

		$this->db->insert('kursus_mahasiswa', $data);
		echo "<script>
						alert('Selamat, anda berhasil mendaftar kursus, tunggu beberapa saat, proses verifikasi 1x24 jam');
    				  </script>";
	}
	public function deletekursus($id){
		$this->db->where('id_info', $id);
		$this->db->delete('kursus_info');
	}
	public function tambahkursus(){
		$data = [
			'nama_kursus' => $_POST['example-nf-nama_kursus'],
			'keterangan_kursus' => $_POST['example-nf-keterangan_kursus'],
			'mulai_kursus' => $_POST['example-nf-start'],
			'berakhir_kursus' => $_POST['example-nf-end'],
			'status_kursus' => $_POST['example-nf-status']
		];
		$this->db->insert('kursus_info', $data);

	}
	public function updatekursus(){
		$ql = $this->db->select('*')->from('kursus_info')->where('id_info',$_POST['example-nf-id_info'])->get();
		if( $ql->num_rows() > 0 ) {
			$this->db->set('nama_kursus', $_POST['example-nf-nama_kursus']);
			$this->db->set('keterangan_kursus', $_POST['example-nf-keterangan_kursus']);
			$this->db->set('mulai_kursus', $_POST['example-nf-start']);
			$this->db->set('berakhir_kursus', $_POST['example-nf-end']);
			$this->db->set('status_kursus', $_POST['example-nf-status']);
			$this->db->where('id_info', $_POST['example-nf-id_info']);
			$this->db->update('kursus_info');
		}
	}
	public function deletemahasiswa($id){
		$this->db->where('id_mahasiswa', $id);
		$this->db->delete('kursus_mahasiswa');
	}
	public function updatemahasiswa(){
		$ql = $this->db->select('*')->from('kursus_mahasiswa')->where('id_mahasiswa',$_POST['example-nf-id_mhs'])->get();
		if( $ql->num_rows() > 0 ) {
			$this->db->set('nama', $_POST['example-nf-nama']);
			$this->db->set('npm', $_POST['example-nf-npm']);
			$this->db->set('kelas', $_POST['example-nf-kelas']);
			$this->db->set('nama_kursus', $_POST['example-nf-nama-kursus']);
			$this->db->set('status_kursus', $_POST['example-nf-status']);
			$this->db->where('id_mahasiswa', $_POST['example-nf-id_mhs']);
			$this->db->update('kursus_mahasiswa');
		}
	}
}
