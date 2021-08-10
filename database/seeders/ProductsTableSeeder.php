<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id'           => 1,
                'nama'         => "Tes Rapid Antigen",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 2,
                'nama'         => "Tes RT-PCR",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 3,
                'nama'         => "Imune Booster",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 4,
                'nama'         => "Vaksin",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 5,
                'nama'         => "Lab Darah",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 6,
                'nama'         => "Gold",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 7,
                'nama'         => "Basic",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 8,
                'nama'         => "Tindakan Medis Minor",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 9,
                'nama'         => "Perawatan Pasien Diabetes",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'id'           => 10,
                'nama'         => "Fisioterapi",
                'harga'        => "100000",
                'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
