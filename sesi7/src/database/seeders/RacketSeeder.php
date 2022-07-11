<?php

namespace Database\Seeders;

use App\Models\Racket;
use Illuminate\Database\Seeder;

class RacketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Racket::query()->insert([
            'id' => 'a861b320-00d8-11ed-b939-0242ac120002',
            'name' => 'ARCSABER 7 PLAY',
            'brand_id' => '2c6aa83e-00d4-11ed-b939-0242ac120002'
        ]);

        Racket::query()->insert([
            'id' => 'a861b5e6-00d8-11ed-b939-0242ac120002',
            'name' => 'ASTROX 99 PRO',
            'brand_id' => '2c6aa83e-00d4-11ed-b939-0242ac120002'
        ]);

        Racket::query()->insert([
            'id' => 'a861b744-00d8-11ed-b939-0242ac120002',
            'name' => 'NANOFLARE 800',
            'brand_id' => '2c6aa83e-00d4-11ed-b939-0242ac120002'
        ]);

        Racket::query()->insert([
            'id' => 'a861bbe0-00d8-11ed-b939-0242ac120002',
            'name' => 'AXForce 80 5U',
            'brand_id' => '2c6aa9f6-00d4-11ed-b939-0242ac120002'
        ]);

        Racket::query()->insert([
            'id' => 'a861bcf8-00d8-11ed-b939-0242ac120002',
            'name' => 'Turbo Charging 70 Combat',
            'brand_id' => '2c6aa9f6-00d4-11ed-b939-0242ac120002'
        ]);

        Racket::query()->insert([
            'id' => 'a861bef6-00d8-11ed-b939-0242ac120002',
            'name' => 'Aeronaut 9000',
            'brand_id' => '2c6aa9f6-00d4-11ed-b939-0242ac120002'
        ]);
    }
}
