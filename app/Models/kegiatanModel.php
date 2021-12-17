<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
  protected $table      = 'kegiatan';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';

  protected $allowedFields = ['judul', 'isi', 'foto'];

  public function search($keyword)
  {
    return $this->table('kegiatan')->like('judul', $keyword);
    // return $this->table('kegiatan')->like('judul', $keyword)->orLike('isi', $keyword)->orLike('excerpt', $keyword);
  }
}
