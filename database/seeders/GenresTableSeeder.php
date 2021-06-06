<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $param = [
      'genre' => '寿司'
    ];
    Genre::insert($param);
    $param = [
      'genre' => '焼肉'
    ];
    Genre::insert($param);
    $param = [
      'genre' => '居酒屋'
    ];
    Genre::insert($param);
    $param = [
      'genre' => 'イタリアン'
    ];
    Genre::insert($param);
    $param = [
      'genre' => 'ラーメン'
    ];
    Genre::insert($param);
  }
}
