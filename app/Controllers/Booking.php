<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Booking extends BaseController
{
  public function index()
  {
    return view('dashboard/booking');
  }
}
