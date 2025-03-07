<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once 'ApiConfig.php';

class ApiController extends ApiConfig {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    
    public function verificationIm() {
    	$output = array();

    	$ims = isset($_GET['_ims']) ? $_GET['_ims'] : 0;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_lpers_augure')
                             ->where('matricule',$ims)
                             ->limit(1)
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status, "imRes"=>$ims ]));
        };
    }

    public function verificationCin(){
        $output = array();

        $ims = isset($_GET['_ims']) ? $_GET['_ims'] : 0;
        $cin = isset($_GET['_cin']) ? $_GET['_cin'] : 0;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_lpers_augure')
                             ->where('matricule',$ims)
                             ->where('cin',$cin)
                             ->limit(1)
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status, "imRes"=>$ims,"data"=>$__res ]));
        };
    }

}