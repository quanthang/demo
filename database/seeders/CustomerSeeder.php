<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
        [
            'id' => 1,
            'name' => 'Quân',
            'address' => 19,
            'created_at' => Carbon::now()
        ],[
                'id' => 2,
                'name' => 'Cảnh',
                'address' => 17,
                'created_at' => Carbon::now()
            ],[
                'id' => 3,
                'name' => 'Dũng',
                'address' => 21,
                'created_at' => Carbon::now()
            ],[
                'id' => 4,
                'name' => 'Huy',
                'address' => 20,
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'name' => 'Phong',
                'address' => 18,
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
