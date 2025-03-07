<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiConfig extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With,x-api-key");

        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            http_response_code(200);
            exit;
        }
    }


    public function verify_api_key() {
        $headers = $this->input->request_headers();
        $output = array();
        if (!isset($headers['X-API-KEY']) || $headers['X-API-KEY'] !== $this->config->item('api_key')) {

            $this->output
                ->set_content_type('application/json')
                ->set_status_header(403)
                ->set_output(json_encode(["error" => "Accès interdit. Clé API invalide."]));

            return false;
        }else{
            return true;
        }
    }

}