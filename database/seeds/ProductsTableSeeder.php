<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $pr1 = [
            'name' => 'Majica muska',
            'price' => 30.50,
            'description' => 'nesto nesto nesto nesto nesto nesto nesto nesto ',
            //'image' => 'uploads/products/image.jpg',
            'size' => 'L',
            'color' => 'blue',
            'quantity' => 300,
        ];

        $pr2 = [
            'name' => 'Majica muska',
            'price' => 30.50,
            'description' => 'nesto nesto nesto nesto nesto nesto nesto nesto ',
            //'image' => 'uploads/products/image1.jpg',
            'size' => 'M',
            'color' => 'red',
            'quantity' => 300,
        ];

        Product::create($pr1);
        Product::create($pr2);
    }
}
