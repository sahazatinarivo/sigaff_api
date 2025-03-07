<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
    
    var $_params = array();
    
    function __construct() {
        parent::__construct();
    }
    
    public function afficher( $_data = array(), $_ajax = false ) {
        $this->_params['_ajax'] = (int)$_ajax;
        $this->_params = array_merge($this->_params, $_data);
        if ( $_ajax ) {
            $this->load->view($_data['_vue'], $this->_params);
        } else {
            $this->load->view('layout', $this->_params);
        }
    }

    public function afficherRes( $view , $_data = array(), $_ajax = false ){
        $this->_params['_ajax'] = (int)$_ajax;
        $this->_params['view'] = $view;
        $this->_params = array_merge($this->_params, $_data);

        $this->afficher(array('_vue' => 'tdb', $_data));
    }
    
    public function jsonRes( $_data = array() ) {
        
        $this->_params = array_merge($this->_params, $_data);
        $this->load->view('json', array('response' => json_encode($this->_params)));
    }
}
