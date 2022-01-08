<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class Pengurus extends BaseController
{
  public function __construct()
  {
  }
  public function index()
  {
    return view('error\html\featurenotfound');
  }
}
