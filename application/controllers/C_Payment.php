<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Payment extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
  }

  public function index()
  {
    // code...

  }
  public function checkout($value='')
  {
    // code...
        $this->load->view('V_Checkout');
  }
  public function pay($value='')
  {
    // code...
    $this->load->view('V_Payment');
  }
  public function success_pay($value='')
  {
    // code...
    $this->load->view('V_Success_Payment');
  }
}
?>
