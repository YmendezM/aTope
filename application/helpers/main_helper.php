<?php

function getEmpresaUrl(){
    $CI = & get_instance();
    $CI->load->library("sessionData/dataSession");
    $dataSession = new DataSession();
    return $dataSession->getEmpresa();
}