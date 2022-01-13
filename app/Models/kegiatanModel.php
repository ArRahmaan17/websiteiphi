<?php

namespace App\Models;

use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Model;

class KegiatanModel extends Model
{
  protected $table      = 'kegiatan';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';

  protected $allowedFields = ['judul', 'isi', 'foto', 'video'];

  public function getDataKegiatan(string $slug = 'false', int $id = null)
  {
    if ($slug == 'false') {
      return $this->findAll();
    } elseif (!empty($id)) {
      return $this->where(['id' => $id])->first();
    } else {
      return $this->where(['slug' => $slug])->first();
    }
  }

  public function search($keyword)
  {
    return $this->table('kegiatan')->like('judul', $keyword)->orLike('isi', $keyword)->orLike('excerpt', $keyword);
  }
}
