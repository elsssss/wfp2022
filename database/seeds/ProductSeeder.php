<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 10; $i++) {
            for($j = o; $j < 3; $j++) {
                DB::table('products')->insert([
                    'nama' => Str::random(10),
                    'category_id' => $i
                ]);
            }
        }
    }
}
