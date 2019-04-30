<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Game extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
  }

  public function index()
  {
    // code...
    $this->load->view('landing/page_header2');
    $this->load->view('V_Game');
  }
  public function FunctionName($value='')
  {
    // code...
  }
}
?>
