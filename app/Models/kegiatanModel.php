<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
  protected $table      = 'kegiatan';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';

  protected $allowedFields = ['judul', 'isi', 'foto', 'video'];

  public function getDataKegiatan($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    } else {
      return $this->where(['slug' => $slug])->first();
    }
  }

  public function search($keyword)
  {
    return $this->table('kegiatan')->like('judul', $keyword);
    // return $this->table('kegiatan')->like('judul', $keyword)->orLike('isi', $keyword)->orLike('excerpt', $keyword);
  }
}
