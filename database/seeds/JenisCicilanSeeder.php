<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisCicilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = ['Mobil', 'Motor', 'KPR', 'Customer Goods'];

        foreach ($jenis as $jeniss){
            DB::table('jenis_cicilans')->insert([
                'jenis' => $jeniss,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
