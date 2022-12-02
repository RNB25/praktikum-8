<?php

namespace App\Controllers;

class home extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Home'
        ];
        
        return view('pages/home', $data);
    }
}