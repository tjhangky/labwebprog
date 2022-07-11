<?php

namespace Database\Seeders;

use App\Models\UsageLog;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Seeder;

class UsageLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsageLog::query()->insert([
            'id' => 'ba8c7186-00db-11ed-b939-0242ac120002',
            'user_id' => '9df6cef0-00da-11ed-b939-0242ac120002',
            'racket_id' => 'a861b744-00d8-11ed-b939-0242ac120002',
            'usage_date' => Carbon::create('2022','5', '17')
        ]);
        UsageLog::query()->insert([
            'id' => 'ba8c73e8-00db-11ed-b939-0242ac120002',
            'user_id' => '9df6cef0-00da-11ed-b939-0242ac120002',
            'racket_id' => 'a861bef6-00d8-11ed-b939-0242ac120002',
            'usage_date' => Carbon::create('2022', '6', '21')
        ]);
        UsageLog::query()->insert([
            'id' => 'ba8c755a-00db-11ed-b939-0242ac120002',
            'user_id' => '9df6d102-00da-11ed-b939-0242ac120002',
            'racket_id' => 'a861b320-00d8-11ed-b939-0242ac120002',
            'usage_date' => Carbon::create('2022', '6', '23')
        ]);
        UsageLog::query()->insert([
            'id' => 'ba8c769a-00db-11ed-b939-0242ac120002',
            'user_id' => '9df6d102-00da-11ed-b939-0242ac120002',
            'racket_id' => 'a861b5e6-00d8-11ed-b939-0242ac120002',
            'usage_date' => Carbon::create('2022', '7', '1')
        ]);
    }
}
