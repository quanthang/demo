<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderId'=>1,
                'productId'=>1,
                'quantity'=>2,
                'amount'=>40000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId'=>3,
                'productId'=>2,
                'quantity'=>2,
                'amount'=>20000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId'=>4,
                'productId'=>9,
                'quantity'=>2,
                'amount'=>40000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>3,
                'productId'=>3,
                'quantity'=>4,
                'amount'=>200000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>5,
                'productId'=>6,
                'quantity'=>100,
                'amount'=>100000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>2,
                'productId'=>7,
                'quantity'=>5,
                'amount'=>100000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>1,
                'productId'=>9,
                'quantity'=>2,
                'amount'=>40000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>1,
                'productId'=>10,
                'quantity'=>10,
                'amount'=>60000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>4,
                'productId'=>5,
                'quantity'=>2,
                'amount'=>90000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>5,
                'productId'=>4,
                'quantity'=>2,
                'amount'=>6000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>3,
                'productId'=>3,
                'quantity'=>2,
                'amount'=>40000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>2,
                'productId'=>2,
                'quantity'=>2,
                'amount'=>20000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>4,
                'productId'=>3,
                'quantity'=>10,
                'amount'=>500000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>2,
                'productId'=>8,
                'quantity'=>10,
                'amount'=>400000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>1,
                'productId'=>5,
                'quantity'=>10,
                'amount'=>450000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>2,
                'productId'=>2,
                'quantity'=>10,
                'amount'=>200000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>2,
                'productId'=>7,
                'quantity'=>7,
                'amount'=>140000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId'=>1,
                'productId'=>8,
                'quantity'=>10,
                'amount'=>400000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>1,
                'productId'=>5,
                'quantity'=>4,
                'amount'=>80000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>1,
                'productId'=>10,
                'quantity'=>2,
                'amount'=>12000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>1,
                'productId'=>5,
                'quantity'=>20,
                'amount'=>900000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>1,
                'productId'=>4,
                'quantity'=>2,
                'amount'=>6000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>2,
                'productId'=>5,
                'quantity'=>40,
                'amount'=>1800000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>4,
                'productId'=>3,
                'quantity'=>2,
                'amount'=>100000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>1,
                'productId'=>1,
                'quantity'=>2,
                'amount'=>40000,
                'created_at' => Carbon::now()
            ],[

                'orderId'=>5,
                'productId'=>9,
                'quantity'=>2,
                'amount'=>40000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>4,
                'productId'=>4,
                'quantity'=>2,
                'amount'=>12000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>3,
                'productId'=>2,
                'quantity'=>2,
                'amount'=>20000,
                'created_at' => Carbon::now()
            ],
            [

                'orderId'=>4,
                'productId'=>6,
                'quantity'=>20,
                'amount'=>20000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId'=>1,
                'productId'=>5,
                'quantity'=>2,
                'amount'=>90000,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
