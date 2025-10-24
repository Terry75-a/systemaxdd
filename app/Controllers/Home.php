<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index')
            .view('/layouts/header')
            .view('/layouts/nav')
            .view('/layouts/footer');
            // . view('layouts/footer');

        
        
    }
    public function dsg(): string
    {
        return view('dsg')
            .view('/layouts/headerdsg')
            .view('/layouts/navdsg')
            .view('/layouts/footerdsg');
            
            
            
    }
    public function precio(): string
    {
        return view('precio')
          .view('/layouts/navprecio')
          .view('/layouts/headerprecio')
          .view('/layouts/footerprecio');
    }
    
   
    

}
