<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelMatkul;

class Dashboard extends BaseController
{
    public function index()
    {
       // Buat instance dari ModelMatkul
       $modelMatkul = new ModelMatkul();
        
       // Ambil data mata kuliah
       $data['matkul'] = $modelMatkul->tampil_data()->getResult();
       
       // Load views
       echo view("templates/header");
       echo view("templates/sidebar");
       echo view("dashboard", $data);
       echo view("templates/footer");
    }
}
