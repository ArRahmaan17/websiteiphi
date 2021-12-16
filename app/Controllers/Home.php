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
        return view('pages/kegiatan', [
            'title' => 'Kegiatan'
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
        return view('pages/detailkegiatan', [
            'title' => 'Detail Kegiatan',
            'slug' => $slug
        ]);
    }
}
