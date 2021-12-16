<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;


class Home extends BaseController
{
  public function kegiatanbanyak()
  {
    return view('pages/admin/kegiatan', [
      'title' => 'Data Kegiatan'
    ]);
  }
  public function pengurus()
  {
    return view('pages/admin/pengurus', [
      'title' => 'Data Pengurus'
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
