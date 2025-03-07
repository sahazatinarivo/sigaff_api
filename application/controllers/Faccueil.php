<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once 'Base.php';

class Faccueil extends Base {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Fetabs','etab');
    }
    
    public function index() {
      // $data = array('response' => 'RESTfull API');

      // if(count($data ) > 0)
      // {
      //    $this->response($data ,REST_Controller::HTTP_OK);
      // }
      // else
      // {
      //    $error = array('message' => 'No record found');
      //    $this->response($error,REST_Controller::HTTP_OK);
      // }  
    }

}