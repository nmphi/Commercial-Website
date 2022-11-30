<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 6,
                'name' => 'tung',
                'email' => 'tung@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,

                'company_name' => 'VietHan',
                'country' => 'VietNam',
                'street_address' => '55 Huynh Van Nghe',
                'postcode_zip' => '10000',
                'town_city' => 'Da Nang',
                'phone' => '0897217058',
            ],
        ]);

        DB::table('users')->insert([
            
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 2,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 2,
                'description' => null,
            ],
        ]);

       

        DB::table('brands')->insert([
            [
                'name' => 'ASUS',
            ],
            [
                'name' => 'MSI',
            ],
            [
                'name' => 'Adata',
            ],
            [
                'name' => 'Gigabyte',
            ],
            [
                'name' => 'Intel',
            ],
            [
                'name' => 'Corsair',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'CPU',
            ],
            [
                'name' => 'VGA',
            ],
            [
                'name' => 'Mainboard',
            ],
            [
                'name' => 'PSU',
            ],
            [
                'name' => 'Ram',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'RTX 3060ti TUF Gaming',
                'description' => null,
                'content' => '',
                'price' => 629.99,
                'qty' => 20,
                'discount' => 495,
                'weight' => 1.3,
                'sku' => null,
                'featured' => true,
                
            ],
            [
                'id' => 2,
                'brand_id' => 6,
                'product_category_id' => 5,
                'name' => 'RAM Corsair Vengeance RGB RS 32GB (DDR4 | 2x 16GB | 3200MHz | C16 | XMP2.0)',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 13,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 5,
                'name' => 'Ram Desktop Adata XPG Spectrix D41 RGB (AX4U36008G18I-DT41) 16GB (2x8GB) DDR4 3600Mhz',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                
            ],
            [
                'id' => 4,
                'brand_id' => 5,
                'product_category_id' => 1,
                'name' => 'CPU Intel Core i7-13700K (Up To 5.40GHz, 16 Nhân 24 Luồng, 30M Cache, Raptor Lake)',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                
            ],
            [
                'id' => 5,
                'brand_id' => 5,
                'product_category_id' => 1,
                'name' => "CPU Intel Core i5-12600K (3.7GHz turbo 4.9Ghz |10 nhân 16 luồng | 20MB Cache | 125W)",
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => false,
                
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'ASUS ROG STRIX RTX 3070 Ti OC',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                
            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'Mainboard Asus ROG X570 Crosshair VIII Hero (Wi-Fi)',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'Mainboard Asus ROG Crosshair VII Hero (AMD Socket AM4)',
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'Mainboard Asus ROG Crosshair VIII Impact',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
        ]);

        

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
        ]);
    }
}

