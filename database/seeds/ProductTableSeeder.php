<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'description'   =>  'this is a description',
            'price'         =>  50,
            'title'         =>  'Product number 1',
            'image_path'    =>  'http://static.wixstatic.com/media/04839a_b4d0c16c316d49b68c12dee6f0920ce4.jpg'
        ]);

        $product->save();

        $product = new Product([
            'description'   =>  'this is a description',
            'price'         =>  100,
            'title'         =>  'Product number 2',
            'image_path'    =>  'http://static.wixstatic.com/media/04839a_b4d0c16c316d49b68c12dee6f0920ce4.jpg'
        ]);

        $product->save();

        $product = new Product([
            'description'   =>  'this is a description',
            'price'         =>  200,
            'title'         =>  'Product number 3',
            'image_path'    =>  'http://static.wixstatic.com/media/04839a_b4d0c16c316d49b68c12dee6f0920ce4.jpg'
        ]);

        $product->save();

        $product = new Product([
            'description'   =>  'this is a description',
            'price'         =>  3000,
            'title'         =>  'Product number 4',
            'image_path'    =>  'http://static.wixstatic.com/media/04839a_b4d0c16c316d49b68c12dee6f0920ce4.jpg'
        ]);

        $product->save();

        $product = new Product([
            'description'   =>  'this is a description',
            'price'         =>  10,
            'title'         =>  'Product number 5',
            'image_path'    =>  'http://static.wixstatic.com/media/04839a_b4d0c16c316d49b68c12dee6f0920ce4.jpg'
        ]);

        $product->save();
    }
}
