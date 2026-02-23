<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MKN01',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 3000,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MKN02',
                'barang_nama' => 'Sereal',
                'harga_beli' => 6000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'MNM01',
                'barang_nama' => 'Teh Botol Sosro',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'MNM02',
                'barang_nama' => 'Kopi Golda',
                'harga_beli' => 3000,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'SNK01',
                'barang_nama' => 'Chitato',
                'harga_beli' => 8000,
                'harga_jual' => 9500,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'SNK02',
                'barang_nama' => 'Taro',
                'harga_beli' => 4500,
                'harga_jual' => 5000,
            ],
             [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'BMB01',
                'barang_nama' => 'Racik Ayam Goreng',
                'harga_beli' => 1500,
                'harga_jual' => 2000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'BMB02',
                'barang_nama' => 'Royco Kaldu Ayam',
                'harga_beli' => 500,
                'harga_jual' => 1000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'FCW01',
                'barang_nama' => 'Garnier Pure Active',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'FCW02',
                'barang_nama' => 'Pond\'s White Beauty',
                'harga_beli' => 12000,
                'harga_jual' => 18000,
                ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
