<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BarangTambahan extends BaseController
{
  public function index()
  {
    return view('dashboard/barang-tambahan');
  }
}
