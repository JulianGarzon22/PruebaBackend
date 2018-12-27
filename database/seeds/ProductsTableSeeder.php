<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Product::create([
        	'name' => 'Samsung Cell Phone',
        	'reference'=> 'Galaxy A7',
            'price' => '300',
            'stock' => '3',
            'status' => 'ACTIVE'
        ]);
        App\Product::create([
        	'name' => 'Apple Smart Watch',
        	'reference'=> 'Fit 4',
            'price' => '130',
            'stock' => '6',
            'status' => 'ACTIVE'
        ]);
        App\Product::create([
        	'name' => 'Totto Backpack',
        	'reference'=> 'C213HM',
            'price' => '40',
            'stock' => '10',
            'status' => 'ACTIVE'
        ]);
        App\Product::create([
        	'name' => 'Smart Pillow',
        	'reference'=> 'X213',
            'price' => '50',
            'stock' => '1',
            'status' => 'ACTIVE'
        ]);
        App\Product::create([
        	'name' => 'Asus Gaming PC',
        	'reference'=> '7th generation',
            'price' => '1000',
            'stock' => '0',
            'status' => 'DISABLE'
        ]);
        App\Product::create([
        	'name' => 'Samsung Smart TV',
        	'reference'=> 'Samsung 5th generation',
            'price' => '200',
            'stock' => '0',
            'status' => 'DISABLE'
        ]);
    }
}
