<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
           [
            'name'=>'LG Mobile',
            "price"=>"200",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio doloribus provident velit nobis!",
            "category"=>"mobile",
            "gallery"=>"https://upload.wikimedia.org/wikipedia/commons/3/34/LG_G4_White_Gold_Edition.jpg"
           ],
           [
            'name'=>'LG Mobile',
            "price"=>"200",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio doloribus provident velit nobis!",
            "category"=>"mobile",
            "gallery"=>"https://upload.wikimedia.org/wikipedia/commons/3/34/LG_G4_White_Gold_Edition.jpg"
           ],
           [
            'name'=>'LG Mobile',
            "price"=>"200",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio doloribus provident velit nobis!",
            "category"=>"mobile",
            "gallery"=>"https://upload.wikimedia.org/wikipedia/commons/3/34/LG_G4_White_Gold_Edition.jpg"
           ],
           [
            'name'=>'LG Mobile',
            "price"=>"200",
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio doloribus provident velit nobis!",
            "category"=>"mobile",
            "gallery"=>"https://upload.wikimedia.org/wikipedia/commons/3/34/LG_G4_White_Gold_Edition.jpg"
           ]
        ]);
    }
}
