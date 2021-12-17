<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class KegiatanSeeder extends Seeder
{
  public function run()
  {
    for ($i = 0; $i < 100; $i++) {
      // $faker = \Faker\Factory::create();
      // $judul = $faker->sentence();
      // $postingan = $faker->text();
      // $data = [
      //   'judul' => $judul,
      //   'slug'    => url_title($judul, '-', true),
      //   'postingan' => $postingan,
      //   'excerpt' => '',
      //   'foto' => 'default.png',
      //   'penulis' => $faker->name(),
      //   'created_at' => Time::createFromTimestamp($faker->unixTime()),
      //   'updated_at' => Time::now()
      // ];
      // // Simple Queries
      // $this->db->query("INSERT INTO blogs (judul, slug, postingan, excerpt, foto, penulis, created_at, updated_at) VALUES(:judul:, :slug:, :postingan:, :excerpt:, :foto:, :penulis:, :created_at:, :updated_at:)", $data);
      $faker = \Faker\Factory::create();
      $judul = $faker->words(3, true);
      $isi = $faker->text();
      $data = [
        'judul' => $judul,
        'slug' => url_title($judul, '-', true),
        'isi' => $isi,
        'excerpt' => '',
        'foto' => 'default.webp',
        'penulis' => $faker->name(),
        'created_at' => Time::createFromTimestamp($faker->unixTime()),
        'updated_at' => Time::now()
      ];
      $this->db->query("INSERT INTO kegiatan(judul, slug, isi, excerpt, foto, penulis, created_at, updated_at) VALUES (:judul:, :slug:, :isi:, :excerpt:, :foto:, :penulis:, :created_at:, :updated_at:)", $data);
    }
  }
}
