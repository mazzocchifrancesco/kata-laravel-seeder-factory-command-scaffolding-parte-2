<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
      CategorySeeder::class,
      // ProductSeeder::class
    ]);

    // crea 95 prodotti "starndard" con feature = 0
    Product::factory()->count(95)->create();
    //creo 5 prodotti featured, con feature=1
    Product::factory()->count(5)->create([
      'featured' => 1,
    ]);
  }
}
