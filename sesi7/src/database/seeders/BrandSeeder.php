<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::query()->insert([
            'id' => '2c6aa83e-00d4-11ed-b939-0242ac120002',
            'name' => 'Yonex',
        ]);

        Brand::query()->insert([
            'id' => '2c6aa9f6-00d4-11ed-b939-0242ac120002',
            'name' => 'Li Ning'
        ]);
    }
}
