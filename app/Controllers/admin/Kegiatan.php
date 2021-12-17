<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;


class Kegiatan extends BaseController
{
  public function index()
  {
    return view('pages/admin/kegiatan', [
      'title' => 'Data Kegiatan'
    ]);
  }
  public function buatkegiatan()
  {
    return view('pages/admin/buatkegiatan', [
      'title' => 'Buat Kegiatan'
    ]);
  }
  public function perbaruikegiatan()
  {
    return view('pages/admin/perbaruikegiatan', [
      'title' => 'Perbarui Kegiatan'
    ]);
  }
  public function kegiatan()
  {
    return view('pages/admin/detailkegiatan', [
      'title' => 'Kegiatan'
    ]);
  }
}
