<?php

namespace App\Controllers;

use App\Models\KegiatanModel;

class Kegiatan extends BaseController
{
    public function index()
    {
        $kegiatanModel = new \App\Models\KegiatanModel();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $kegiatan = $kegiatanModel->search($keyword);
        } else {
            $kegiatan = $kegiatanModel;
        }
        return view('pages/kegiatan', [
            'title' => 'Kegiatan',
            'data' => $kegiatan->findAll()
        ]);
    }
    public function kegiatan($slug)
    {
        $kegiatanModel = new \App\Models\KegiatanModel();
        return view('pages/detailkegiatan', [
            'title' => 'Detail Kegiatan',
            'data' => $kegiatanModel->first($slug)
        ]);
    }
}
