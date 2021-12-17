<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/index',[
            'title' => 'HOME'
        ]);
    }
    public function kegiatanbanyak()
    {
        $kegiatanModel = new \App\Models\KegiatanModel();
        return view('pages/kegiatan', [
            'title' => 'Kegiatan',
            'data' => $kegiatanModel->findAll()
        ]);
    }
    public function pengurus()
    {
        return view('pages/pengurus', [
            'title' => 'Pengurus'
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
