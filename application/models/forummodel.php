<?php
class forummodel extends CI_Model{

	function forummodel()
	{
		parent::__construct();
	}
	function getForumdisplay($limit=''){
			$query=$this->db->query("select  * from fdisplay
			ORDER BY urutan ASC LIMIT $limit");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus[]=$data;
				}
				return $menus;
			}
	}
	function getForumFill($limit='',$offset='',$id=''){
			$query=$this->db->query("select  *,fuser.nama,fthread.id as idforum from fthread
			left join fuser on fuser.id=fthread.userid
			where idforum='$id'
			ORDER BY fthread.id ASC LIMIT $limit,$offset");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getFcontentComment($limit='',$offset='',$id=''){
			$query=$this->db->query("select  *,fuser.nama from fcontent
			left join fuser on fuser.id=fcontent.user
			where fcontent.idthread='$id'
			ORDER BY fcontent.id ASC LIMIT $limit,$offset");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getDetailForum($id=''){
	$query=$this->db->query("select  * ,fuser.nama from fthread
			left join fuser on fuser.id=fthread.userid
			where fthread.id='$id' ");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getForumFillcount($id=''){
			$query=$this->db->query("select  * from fcontent where idforum='$id'");
			return $query->num_rows();
	}
	function getForumFillcountComment($id){
			$query=$this->db->query("select  * from fthread where idforum='$id'");
			return $query->num_rows();
	}
	function getProp($id=''){
	$query=$this->db->query("select  *,fdisplay.nama as namaforum from fthread
	left join fdisplay on fdisplay.id=fthread.idforum
	where idforum='$id'");
	return $query->row();
}

	function saveThread(){
		$idthread=$this->input->post('idthread');
		$isi=$this->input->post('isi');
		$tn=$this->input->post('tn');
		$type=$this->input->post('type');
		$matkul=$this->input->post('matkul');
		$datementor=$this->input->post('datementor');
		$deadline=$this->input->post('deadline');
		$feemin=$this->input->post('feemin');
		$feemax=$this->input->post('feemax');

		$data=array(
		'idforum'=>$idthread,
		'userid'=>$this->session->userdata('USERID'),
		'isi'=>$isi,
		'judul'=>$tn,
		'type'=>$type,
		'matkul'=>$matkul,
		'datementor'=>$datementor,
		'deadline'=>$deadline,
		'feemin'=>$feemin,
		'feemax'=>$feemax
		);
		$this->db->trans_start();
		$this->db->insert('fthread',$data);
		$this->db->trans_complete();
		redirect (base_url().'home/mforum/'.$idthread);
	}
	function detailThread($id=''){

	}
	function saveComment(){
		$idthread=$this->input->post('idthread');
		$isi=$this->input->post('isi');
		$data=array(
		'idthread'=>$idthread,
		'user'=>$this->session->userdata('USERID'),
		'isi'=>$isi,
		'tanggal'=>date("Y-m-d")
		);
		$this->db->trans_start();
		$this->db->insert('fcontent',$data);
		$this->db->trans_complete();
		redirect (base_url().'home/detailThread/'.$idthread);
	}
	function cekuser(){
		$u=$this->input->post('user');
		$p=$this->input->post('pass');
		$query=$this->db->query("select  * from fuser where username='$u' and password='$p'");
		$cek=$query->num_rows();
		if($cek==0){
			echo"<script>alert('Data Tidak Ditemukan');</script>";
			redirect (base_url().'home/user_login/');
		} else {
			$data=$query->row();
			$datac=array('LOGIN'=>TRUE,'NAMA'=>$data->nama,'USERID'=>$data->id,'STATUS_LOGIN'=>"ANDA SUKSES LOGIN", 'PASS'=>$data->password);
			$this->session->set_userdata($datac);
			redirect (base_url().'home');
		}
	}
	function cekdup(){
		$u=$this->input->post('user');
		$query=$this->db->query("select  * from fuser where username='$u'");
		return $query->num_rows();
	}
	function adduser(){
		$n=$this->input->post('nama');
		$u=$this->input->post('user');
		$p=$this->input->post('pass');
		$nim=$this->input->post('nim');
		$jurusan=$this->input->post('jurusan');
		$email=$this->input->post('email');
		$tlp=$this->input->post('tlp');

		$data=array(
		'nama'=>$n,
		'username'=>$u,
		'password'=>$p,
		'nim'=>$nim,
		'jurusan'=>$jurusan,
		'email'=>$email,
		'tlp'=>$tlp
		);
		$this->db->trans_start();
		$this->db->insert('fuser',$data);
		$this->db->trans_complete();
		redirect (base_url().'home/user_login/');
	}

	function editbio($id='')
	{
		$query=$this->db->query("select  * from fuser where id=''$id'");
		if ($query->num_rows() > 0) {
		 foreach ($query->result() as $data) {
			 $mdata[]=$data;
		 }
		 return $mdata;
	 }
	}
}

?>
