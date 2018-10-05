<?php

class home extends CI_Controller {


  var $limit=10;
  var $offset=10;
  function index($limit='',$offset=''){
    $this->load->model('forummodel');
    $data['title']="FORUM";
    $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    $this->load->view('header');
    $this->load->view('nav_timeline');
    $this->load->view('index',$data);
    $this->load->view('footer');
  }

  function mforum($idforum='',$limit='',$offset=''){

  $this->load->model('forummodel');
	$data['forumDisplay']=$this->forummodel->getForumdisplay(6);

  /* VAGINATION */
    if($limit==''){
      $limit = 0; $offset=5 ;}
    if($limit!=''){
      $limit = $limit ; $offset=$this->offset ;}
    $key=$this->input->post('search');
    $data['count']=$this->forummodel->getForumFillcount($idforum);
    $config['uri_segment'] = 4;
    $config['base_url'] = base_url().'home/mforum/'.$idforum.'/';
    $config['total_rows'] = $data['count'];
    $config['per_page'] = $this->limit;
    $config['cur_tag_open'] = '<span class="pg">';
    $config['cur_tag_close'] = '</span>';
    $this->pagination->initialize($config);
    /*---*/
		$data['id']=$idforum;
    $data['forumDisplayFill']=$this->forummodel->getForumFill($limit,$offset,$idforum);

    $this->load->view('header');
    $this->load->view('nav_timeline');
    $this->load->view('fdisplay',$data);
    $this->load->view('footer');

  }
  function reqComment($id=''){
    $this->load->model('forummodel');
    $data['id']=$id;
    $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    $info=$this->forummodel->getProp($id);
    if(!empty($info->judul)){
    $data['judul']=$info->judul; }
    $this->load->view('header');
    $this->load->view('nav_timeline');
    $this->load->view('addComment',$data);
    $this->load->view('footer');
  }

  function createThread($id=''){
    $this->load->model('forummodel');
    $data['id']=$id;
    $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    $info=$this->forummodel->getProp($id);
    if(!empty($info->namaforum)){
    $data['namaforum']=$info->namaforum; }

    $this->load->view('header');
    $this->load->view('nav_timeline');
    $this->load->view('addThread',$data);
    $this->load->view('footer');

  }


  function saveThread(){
    $this->load->model('forummodel');
    $idthread=$this->input->post('idthread');
    $tn=$this->input->post('tn');
    $isi=$this->input->post('isi');
		$type=$this->input->post('type');
		$matkul=$this->input->post('matkul');
		$datementor=$this->input->post('datementor');
		$deadline=$this->input->post('deadline');
		$feemin=$this->input->post('feemin');
		$feemax=$this->input->post('feemax');

    if($tn==''){
      $data['flashdata']="JUDUL TIDAK BOLEH KOSONG";
      $data['id']=$idthread;
      $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
      $info=$this->forummodel->getProp($idthread);
      if(!empty($info->namaforum)){
      $data['namaforum']=$info->namaforum;}

      $this->load->view('header');
      $this->load->view('nav_timeline');
      $this->load->view('addThread',$data);
      $this->load->view('footer');

    } else if($isi==''){
      $data['flashdata']="ISI KOMENTAR TIDAK BOLEH KOSONG";
      $data['id']=$idthread;
      $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
      $info=$this->forummodel->getProp($idthread);
      if(!empty($info->namaforum)){
      $data['namaforum']=$info->namaforum; }
      $this->load->view('header');
      $this->load->view('nav_timeline');
      $this->load->view('addThread',$data);
      $this->load->view('footer');
} else   {
    $this->load->model('forummodel');
    $this->forummodel->saveThread();
    }
  }
  function detailThread($id='',$limit='',$offset=''){
    $this->load->model('forummodel');
    $data['id']=$id;
    $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    $data['forumDisplayFill']=$this->forummodel->getDetailForum($id);
    /* VAGINATION */
    if($limit==''){ $limit = 0; $offset=5 ;}
    if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
    $key=$this->input->post('search');
    $data['count']=$this->forummodel->getForumFillcountComment($id);
    $config['uri_segment'] = 4;
    $config['base_url'] = base_url().'home/mforum/'.$id.'/';
    $config['total_rows'] = $data['count'];
    $config['per_page'] = $this->limit;
    $config['cur_tag_open'] = '<span class="pg">';
    $config['cur_tag_close'] = '</span>';
    $this->pagination->initialize($config);
    /*---*/
    $data['forumDisplayFillComment']=$this->forummodel->getFcontentComment($limit,$offset,$id);
    $this->load->view('header');
    $this->load->view('nav_timeline');
    $this->load->view('fdetail',$data);
    $this->load->view('footer');

  }
  function saveComment(){
    $this->load->model('forummodel');
    $idthread=$this->input->post('idthread');
    $isi=$this->input->post('isi');
    if($isi==''){
      $data['flashdata']="ISI KOMENTAR TIDAK BOLEH KOSONG";
      $data['id']=$idthread;
      $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
      $info=$this->forummodel->getProp($idthread);
      $data['judul']=$info->judul;
      $this->load->view('header');
      $this->load->view('nav_timeline');
      $this->load->view('addComment',$data);
      $this->load->view('footer');

    } else {
    $this->load->model('forummodel');
    $this->forummodel->saveComment();
    }
  }
  function user_login(){
    $this->load->model('forummodel');
    $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    $this->load->view('fuser',$data);

  }
  function cekuser(){
    $this->load->model('forummodel');
    $this->forummodel->cekuser();
  }

  function user_add(){
    $this->load->model('forummodel');
    $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    $this->load->view('fuseradd',$data);

  }
  function adduser(){
    $n=$this->input->post('nama');
    $nim=$this->input->post('nim');
    $jurusan=$this->input->post('jurusan');
    $email=$this->input->post('email');
    $tlp=$this->input->post('tlp');
    $u=$this->input->post('user');
    $p=$this->input->post('pass');
    $this->load->model('forummodel');
    $cekdup=$this->forummodel->cekdup();
    if($n==''){
      $data['flashdata']="NAMA TIDAK BOLEH KOSONG";
      $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    } else if($u==''){
      $data['flashdata']="USERNAME TIDAK BOLEH KOSONG";
      $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    }else if($p==''){
      $data['flashdata']="PASSWORD TIDAK BOLEH KOSONG";
      $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    } else if($cekdup>0){
      $data['flashdata']="USERNAME SUDAH TERSEDIA";
      $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
      $this->load->view('fuseradd',$data);
    } else {
      $this->forummodel->adduser();
    }
    $this->load->view('header');
    $this->load->view('nav_timeline');
    $this->load->view('fuseradd',$data);
    $this->load->view('footer');
  }
  function user_logout(){
    $this->session->sess_destroy();
    redirect (base_url().'home');
  }

  function edit_bio($id='')
  {
    $this->load->model('editbio',$NAMA,$PASS);

    $this->load->model('forummodel');
    $data['id']=$id;
    $data['forumDisplay']=$this->forummodel->getForumdisplay(6);
    $info=$this->forummodel->editbio($id);
    $data['biodata']=$this->forummodel->editbio($id);

    $this->load->view('header');
    $this->load->view('nav_timeline');
    $this->load->view('v_editprofil',$data);
    $this->load->view('footer');
  }
}
