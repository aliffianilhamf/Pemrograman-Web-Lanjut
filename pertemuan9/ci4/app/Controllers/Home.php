<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    
    public function about()
    {
        $data['nama_persh'] = 'Investasi UMKM Sejahtera Mandiri';
        $data['direktur'] = 'Fahri Firdausillah';
        return view('about', $data);
    }
}
