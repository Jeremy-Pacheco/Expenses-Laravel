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
    {       //!Activate it when you create a user and run the seeder.
        // DB::table('expenses')->insert([
        //     [
        //         'user_id' => 1,
        //         'category'=>'Leisure', 
        //         'mount'=>9.99, 
        //         'description'=>'Movie ticket', 
        //         'purchase_date'=>'2025-10-13'
        //     ],
        //     [
        //         'user_id' => 1,
        //         'category'=>'Transport', 
        //         'mount'=>1.60, 
        //         'description'=>'Transport ticket', 
        //         'purchase_date'=>'2025-10-09'
        //     ],
        // ]);
    }
}
