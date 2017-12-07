<?php

class Admin extends MY_Controller{

  public function dashboard(){

    $this->load->model('articlesmodel', 'articles');
    $articles = $this->articles->articles_list();
    $this->load->view('admin/dashboard', ['articles'=>$articles]);
  }

  public function add_article(){
    $this->load->view('admin/add_article');
  }

  public function store_article(){
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters("<p class='text-primary'>","</p>");
    if($this->form_validation->run('add_article_rules')){
      $post = $this->input->post();
      print_r($post); exit;
    }
    else{
      return redirect('admin/add_article');
    }
  }

  public function edit_article(){

  }

  public function delete_article(){

  }

  public function __construct(){
    parent::__construct();
    if(!$this->session->userdata('user_id')){
        return redirect('login');
    }

  }

}



 ?>
