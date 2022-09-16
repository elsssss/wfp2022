<?php

use Illuminate\Database\Seeder;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswas')->insert([
            'nrp' => '160419157',
            'nama' => 'Elsafira'
        ]);

        DB::table('mahasiswas')->insert([
            'nrp' => '160419107',
            'nama' => 'Bella'
        ]);

        DB::table('mahasiswas')->insert([
            'nrp' => '160419083',
            'nama' => 'Devina'
        ]);
    }
}
