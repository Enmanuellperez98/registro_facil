<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroC extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper('url');
    $this->load->model('registro_model');
  }

  function index()
  {
    $data['registro'] = $this->registro_model->listarRegistro();
    $this->load->view('registro/Principal', $data);
  }
function guardar()
{
  if ($_POST) {
    $this->registro_model->guardarRegistro($_POST);
  }
  $this->index();
}
}
