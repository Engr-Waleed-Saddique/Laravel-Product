<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();

        for($i=0;$i<=5;$i++){

        $product=new Product();
        $product->name=$faker->word();
        $product->price=$faker->numberBetween($min = 1, $max = 10000);
        $product->description=$faker->paragraph;
        $product->created_at=now();
        $product->updated_at=now();
        $product->save();

        }

    }
}
