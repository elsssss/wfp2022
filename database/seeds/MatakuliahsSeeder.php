<?php

use Illuminate\Database\Seeder;

class MatakuliahsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('matakuliahs')->insert([
            'kode' => '0001',
            'nama' => 'WFP'
        ]);

        DB::table('matakuliahs')->insert([
            'kode' => '0002',
            'nama' => 'ALPRO'
        ]);

        DB::table('matakuliahs')->insert([
            'kode' => '0003',
            'nama' => 'RM'
        ]);
    }
}
