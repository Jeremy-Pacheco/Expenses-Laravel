<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ExpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expenses')->insert([
            ['category'=>'Leisure', 'mount'=>9.99, 'description'=>'Movie ticket', 'purchase_date'=>'2025-10-13'],//YYY-MM-DD
            ['category'=>'Transport', 'mount'=>1.60, 'description'=>'Transport ticket', 'purchase_date'=>'2025-10-09'],
        ]);
    }
}
