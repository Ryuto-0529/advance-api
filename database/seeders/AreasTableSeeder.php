<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $param = [
      'area' => '東京都'
    ];
    Area::insert($param);
    $param = [
      'area' => '大阪府'
    ];
    Area::insert($param);
    $param = [
      'area' => '福岡県'
    ];
    Area::insert($param);
  }
}
