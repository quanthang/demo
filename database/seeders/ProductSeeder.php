<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'bánh mì pate',
                'price' => 20000,
                'created_at' => Carbon::now()
            ], [
                'id' => 2,
                'name' => 'coca',
                'price' => 10000,
                'created_at' => Carbon::now()
            ], [
                'id' => 3,
                'name' => 'bánh mì áp chảo',
                'price' => 50000,
                'created_at' => Carbon::now()
            ], [
                'id' => 4,
                'name' => 'trà đá',
                'price' => 3000,
                'created_at' => Carbon::now()
            ], [
                'id' => 5,
                'name' => 'phở',
                'price' => 45000,
                'created_at' => Carbon::now()
            ], [
                'id' => 6,
                'name' => 'bánh đùi gà',
                'price' => 1000,
                'created_at' => Carbon::now()
            ], [
                'id' => 7,
                'name' => 'bánh mì dân tổ',
                'price' => 20000,
                'created_at' => Carbon::now()
            ], [
                'id' => 8,
                'name' => 'bánh cuốn Thanh Trì',
                'price' => 40000,
                'created_at' => Carbon::now()
            ], [
                'id' => 9,
                'name' => 'cốm làng Vòng',
                'price' => 20000,
                'created_at' => Carbon::now()
            ], [
                'id' => 10,
                'name' => 'kem Tràng Tiền',
                'price' => 6000,
                'created_at' => Carbon::now()
            ]

        ]);
    }
}
