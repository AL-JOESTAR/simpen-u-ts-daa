<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restoran;

class RestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            ['menu'=> 'nasi goreng', 'category'=>'Makanan Utama', 'description' => 'nasi goreng ayam', 'price'=> 15000, 'availability' => 'tersedia'],
            ['menu'=> 'Es Jeruk', 'category'=>'minuman', 'description' => 'Es Jeruk Manis', 'price'=> 5000, 'availability' => 'tersedia'],
            ['menu'=> 'Puding', 'category'=>'Dessert', 'description' => 'Puding coklat manis', 'price'=> 20000, 'availability' => 'Sold out']
        ];


        foreach ($data as $datares) {
            Restoran::firstOrCreate($datares);
    }
}
    
}
