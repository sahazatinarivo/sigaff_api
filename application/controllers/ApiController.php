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
        }
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
        }
    }

    public function getFonction(){
        $output = array();

        $typeLoc = isset($_GET['typeLoc']) ? $_GET['typeLoc'] : 0;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_fonction')
                             ->where('id_type_loc',$typeLoc)
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getDren(){
        $output = array();

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_dren')
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getCisco(){
        $output = array();

        $codeDren = isset($_GET['codeDren']) ? $_GET['codeDren'] : 0;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_cisco')
                             ->where('code_dren',$codeDren)
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getEtab(){
        $output = array();

        $codeDren = isset($_GET['codeDren']) ? $_GET['codeDren'] : 0;
        $codeCisco = isset($_GET['codeCisco']) ? $_GET['codeCisco'] : 0;
        $codeFonction = isset($_GET['codeFonction']) ? $_GET['codeFonction'] : null;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $this->db->from('t_etab');
            $this->db->where('code_dren',$codeDren);
            $this->db->where('code_cisco',$codeCisco);
            if ($codeFonction <> null ) {
                if ($codeFonction > 0) {
                    $this->db->where('code_niveau',$codeFonction);
                }else{
                    $this->db->where('existe_presco',1);
                } 
            }

            $__res = $this->db->get()->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getDir(){
        $output = array();
        $codeDren = isset($_GET['codeDi']) ? $_GET['codeDren'] : 0;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_direction')
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }


    public function getServices(){
        $output = array();
        $codeDir = isset($_GET['codeDir']) ? $_GET['codeDir'] : 0;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_service')
                             ->where('code_direction',$codeDir)
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getDiv(){
        $output = array();

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_division_c')
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getServiceDren(){
        $output = array();

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_service_d')
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getCrinfp(){
        $output = array();
        $code_dren = isset($_GET['codeDren']) ? $_GET['codeDren'] : 0;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_crinfp')
                             ->where('code_dren',$code_dren)
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getMotif(){
        $output = array();

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_motifs')
                             ->where('active',1)
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }

    public function getTypeMotif(){
        $output = array();
        $motif = isset($_GET['motif']) ? $_GET['motif'] : 0;

        if ($this->verify_api_key()) {
            $_status = 'ko';

            $__res = $this->db->from('t_type_motif')
                             ->where('id_motif',$motif)
                             ->get()
                             ->result();

            if (count($__res) > 0) {
                $_status = 'ok';
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([ "_status"=> $_status,"data"=>$__res ]));
        }
    }
}