<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    
    public function inicio(){
        return view('inicio/index');
    }

    public function editorial(){
        return view('editoriales/norma');
    }
    
}
