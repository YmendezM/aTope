<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DataSession {

    public $empresa;
    public $reCAPTCHA_site_key;
    
    public function __construct(){
        $this->ci =& get_instance();
        !$this->ci->load->library('session') ? $this->ci->load->library('session') : false;
		!$this->ci->load->helper('url') ? $this->ci->load->helper('url') : false;

        if(strpos(strtolower($_SERVER["SERVER_NAME"]), "essbio") > 0){
            //Configuraciones especificas essbio
            $this->empresa = "essbio";
            $this->reCAPTCHA_site_key=$this->ci->config->item('reCAPTCHA_site_key_essbio');
        }else{
            //Configuraciones especificas nuevosur
            $this->empresa = "nuevosur";
            $this->reCAPTCHA_site_key=$this->ci->config->item('reCAPTCHA_site_key_nuevosur');
        }
        $this->ci->session->set_userdata("empresa",$this->empresa);
        $this->ci->session->set_userdata("reCAPTCHA_site_key",$this->reCAPTCHA_site_key);
    }

    public function getEmpresa(){
        return $this->empresa;
    }
}