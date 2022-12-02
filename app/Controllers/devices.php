<?php

namespace App\Controllers;

class devices extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Devices'
        ];
        return view('pages/devices', $data);
    }
}