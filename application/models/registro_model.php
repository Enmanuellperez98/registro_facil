<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
function listarRegistro()
{
  $query = $this->db->get('registros');
  return $query->result();

}
function guardarRegistro($registro)
{
  $this->db->insert('registros', $registro);
}
}
