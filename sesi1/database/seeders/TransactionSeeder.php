<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('transactions')->insert([
        //     'transaction_id' => Str::uuid(),
        //     'user_name' => 'John Doe',
        //     'price' => 15000,
        //     'item_name' => 'Phone',
        //     'created_at' => Carbon::now()
        // ]);

        Transaction::factory(10)->create();
        
    }
}
