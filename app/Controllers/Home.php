<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
  public function index()
  {
    return view('pages/index', [
      'title' => 'HOME'
    ]);
  }
}
