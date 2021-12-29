<?php

namespace App\Controllers;

use App\Models\KegiatanModel;

class Kegiatan extends BaseController
{
    public function __construct()
    {
        $this->Kegiatan = new KegiatanModel();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $kegiatan = $this->Kegiatan->search($keyword);
        } else {
            $kegiatan = $this->Kegiatan;
        }
        return view('pages/kegiatan', [
            'title' => 'Kegiatan',
            'data' => $kegiatan->getDataKegiatan()
        ]);
    }
    public function kegiatan($slug)
    {
        return view('pages/detailkegiatan', [
            'title' => 'Detail Kegiatan',
            'data' => $this->Kegiatan->getDataKegiatan($slug)
        ]);
    }
}
