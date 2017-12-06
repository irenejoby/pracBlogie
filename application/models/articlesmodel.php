<?php

class Articlesmodel extends CI_Model{

  public function articles_list(){
    $user_id = $this->session->userdata('user_id');

    $query = $this->db->query("SELECT title FROM articles WHERE user_id = '{$user_id}' ");
    return $query->result();
  }

}


 ?>
