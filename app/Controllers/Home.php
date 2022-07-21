<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    
    public function inicio(){
        //$this->load->model("conexion");
        //$arr = $this->conexion->getAll();
        //echo json_encode($arr);
        return view('inicio/index');
        //$this->load->view('inicio/index');

    }

    public function editorial(){
        return view('editoriales/norma');
    }
    
}
