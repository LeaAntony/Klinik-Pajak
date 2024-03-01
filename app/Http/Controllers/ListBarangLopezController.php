<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangLopezController extends Controller
{
    public function getData()
    {
        // Logika untuk mendapatkan array data
        $dataBarang = [
            ['id' => 1, 'nama' => 'Beras Harumas 25 Kg', 'harga' => 350000],
            ['id' => 2, 'nama' => 'Tepung Rosebrand', 'harga' => 10000],
            ['id' => 3, 'nama' => 'Sofell Anti Nyamuk', 'harga' => 3000],
            ['id' => 4, 'nama' => 'Masako', 'harga' => 5000],
            ['id' => 5, 'nama' => 'Minyak Goreng Sunco 1 Liter', 'harga' => 30000],
        ];

        return $dataBarang;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view ('list_barang_lopez', compact('data'));
    }
}
