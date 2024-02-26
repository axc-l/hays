<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function index()
    {
        $data['Title'] = 'IT2C Title';
        $data['Header'] = 'This is the new header';
        echo view('template/header', $data);
        echo view('template/footer');
        
    }
}
