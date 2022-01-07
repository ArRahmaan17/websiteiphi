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
        $pager = \Config\Services::pager();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $kegiatan = $this->Kegiatan->search($keyword);
        } else {
            $kegiatan = $this->Kegiatan;
        }
        return view('pages/kegiatan', [
            'title' => 'Kegiatan',
            'data' => $kegiatan->paginate(6, 'kegiatan'),
            'pager' => $kegiatan->pager
        ]);
    }
    public function detailkegiatan($slug)
    {
        return view('pages/detailkegiatan', [
            'title' => 'Detail Kegiatan',
            'data' => $this->Kegiatan->getDataKegiatan($slug)
        ]);
    }
}
