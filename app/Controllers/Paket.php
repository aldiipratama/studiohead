<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Paket extends BaseController
{
  public function index()
  {
    return view('dashboard/paket');
  }
}
