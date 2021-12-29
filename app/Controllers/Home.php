<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use App\Controllers\BaseController;
use App\Models\KegiatanModel;

class Home extends BaseController
{
  public function __construct()
  {
    helper('text');
    $this->Kegiatan = new KegiatanModel();
  }
  public function index()
  {
    $pager = \Config\Services::pager();
    return view('pages/index', [
      'title' => 'HOME',
      'kegiatan' => $this->Kegiatan->Paginate(3),
      'pager' => $this->Kegiatan->pager
    ]);
  }
}
