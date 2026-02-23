<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJ01',
                'penjualan_tanggal' => '2026-02-15',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PJ02',
                'penjualan_tanggal' => '2026-02-16',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Alice Johnson',
                'penjualan_kode' => 'PJ03',
                'penjualan_tanggal' => '2026-02-17',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Bob Brown',
                'penjualan_kode' => 'PJ04',
                'penjualan_tanggal' => '2026-02-18',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Charlie Davis',
                'penjualan_kode' => 'PJ05',
                'penjualan_tanggal' => '2026-02-19',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'David Wilson',
                'penjualan_kode' => 'PJ06',
                'penjualan_tanggal' => '2026-02-19',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Eve Miller',
                'penjualan_kode' => 'PJ07',
                'penjualan_tanggal' => '2026-02-19',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Frank Anderson',
                'penjualan_kode' => 'PJ08',
                'penjualan_tanggal' => '2026-02-20',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Grace Lee',
                'penjualan_kode' => 'PJ09',
                'penjualan_tanggal' => '2026-02-20',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Hank Taylor',
                'penjualan_kode' => 'PJ10',
                'penjualan_tanggal' => '2026-02-20',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
