<?php

class Login extends MY_Controller{

  public function index(){
    $this->load->view('public/admin_login');
  }
  public function admin_login(){
    $this->form_validation->set_rules('username', 'User Name', 'required|alpha|trim');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-primary'>","</p>");
    if($this->form_validation->run()){
      $username = $this->input->post('username');
      $password = $this->input->post('password');

    $this->load->model('loginmodel');
    $login_id = $this->loginmodel->validate_login($username, $password);
    if($login_id){
      $this->session->set_userdata('user_id', $login_id);
          return redirect('admin/dashboard');
    }
    else{
      echo "password do not match.";
    }
    }
    else{
      $this->load->view('public/admin_login');
    }
  }

  public function admin_logout(){
    $this->session->unset_userdata('user_id');
    return redirect('login');
  }
}


 ?>
