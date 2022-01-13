<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;
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
    return view('pages/Admin/kegiatan', [
      'title' => 'Data Kegiatan',
      'data' => $kegiatan->paginate(6, 'kegiatan'),
      'pager' => $this->Kegiatan->pager
    ]);
  }
  public function perbaruikegiatan($slug)
  {
    return view('pages/Admin/perbaruikegiatan', [
      'title' => 'Perbarui Kegiatan',
      'data' => $this->Kegiatan->getDataKegiatan($slug)
    ]);
  }
  public function detailkegiatan($slug)
  {
    return view('pages/Admin/detailkegiatan', [
      'title' => 'Kegiatan',
      'data' => $this->Kegiatan->getDataKegiatan($slug)
    ]);
  }
  public function buatkegiatan()
  {
    return view('pages/Admin/buatkegiatan', [
      'title' => 'Buat Kegiatan',
      'validation' => \Config\Services::validation()
    ]);
  }
  public function savekegiatan()
  {
    if (!$this->validate([
      'judul' => [
        'rules' => 'required|is_unique[kegiatan.judul]|max_length[100]',
        'errors' => [
          'required' => '{field} tolong harus di isi',
          'is_unique' => '{field} sudah pernah digunakan',
          'max_length' => '{field} Panjang karakter melebihi batas'
        ]
      ],
      'isi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus di isi'
        ]
      ],
      'youtube' => [
        'rules' => 'required|is_unique[kegiatan.video]',
        'errors' => [
          'required' => '{field} youtube harus di isi',
          'is_unique' => '{field} youtube tidak boleh sama'
        ]
      ],
      'foto' => [
        'rules' => 'max_size[foto,2048]|is_image[foto]|mime_in[foto,image/png,image/jpg,image/jpeg]',
        'errors' => [
          'max_size' => 'Ukuran {field} melebihi 2 Mega',
          'mime_in' => 'Tolong masukan {field}',
          'is_image' => 'Tolong upload {field}, jangan yang lain !!!'
        ]
      ]
    ])) {
      return redirect()->to('admin/buatkegiatan')->withInput();
    } else {
      $filefoto = $this->request->getFile('foto');
      if ($filefoto->getError() == 4) {
        $namafoto = 'default.webp';
      } else {
        $namafoto = $filefoto->getRandomName();
        $filefoto->move('img', $namafoto);
      }
      $isi = $this->request->getVar('isi');
      $judul = $this->request->getVar('judul');
      $this->Kegiatan->save([
        'judul' => $judul,
        'slug' => url_title($judul, '-', true),
        'isi' => $isi,
        'excerpt' => word_limiter($isi, 10, '&#8230;'),
        'youtube' => $this->request->getVar('youtube'),
        'penulis' => user()->getUsername(),
      ]);
      d(Time::now());
    }
  }
  public function update($id)
  {
    $judullama = $this->Kegiatan->getDataKegiatan($this->request->getVar('slug'));
    $videolama = $this->Kegiatan->getDataKegiatan($this->request->getVar('slug'));
    if ($judullama == $this->request->getVar('judul') || $videolama == $this->request->getVar('video')) {
      $rule_judul = 'required|is_unique[kegiatan.judul]|max_length[100]';
      $rule_youtube = 'required|is_unique[kegiatan.judul]';
    } else {
      $rule_judul = 'is_unique[kegiatan.judul]|max_length[100]';
      $rule_youtube = 'is_unique[kegiatan.video]';
    }
    if (!$this->validate([
      'judul' => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => '{field} tolong harus di isi',
          'is_unique' => '{field} sudah pernah digunakan',
          'max_length' => '{field} Panjang karakter melebihi batas'
        ]
      ],
      'isi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus di isi'
        ]
      ],
      'youtube' => [
        'rules' => $rule_youtube,
        'errors' => [
          'required' => '{field} youtube harus di isi',
          'is_unique' => '{field} youtube tidak boleh sama'
        ]
      ],
      'foto' => [
        'rules' => 'max_size[foto,2048]|is_image[foto]|mime_in[foto,image/png,image/jpg,image/jpeg]',
        'errors' => [
          'max_size' => 'Ukuran {field} melebihi 2 Mega',
          'mime_in' => 'Tolong masukan {field}',
          'is_image' => 'Tolong upload {field}, jangan yang lain !!!'
        ]
      ]
    ])) {
      return redirect()->to('admin/perbaruikegiatan/' . $this->request->getVar('slug'))->withInput();
    } else {
      $filefoto = $this->request->getFile('foto');
      if ($filefoto == $this->request->getVar('fotolama')) {
        $namafoto = $this->request->getVar('fotolama');
      } else {
        $namafoto = $filefoto->getRandomName();
        $filefoto->move('img', $namafoto);
      }
      $isi = $this->request->getVar('isi');
      $this->Kegiatan->save([
        'id' => $id,
        'judul' => $this->request->getVar('judul'),
        'slug' => $this->request->getVar('slug'),
        'isi' => $isi,
        'excerpt' => word_limiter($isi, 20, '$#8230;'),
        'foto' => $this->request->getFile('foto'),
        'video' => $this->request->getVar('video'),
        'penulis' => user()->getUsername(),
      ]);
    }
  }
}
