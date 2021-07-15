<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Storage::deleteDirectory('public/products');
        // Storage::makeDirectory('public/products');
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
        Product::factory(50)->create();
        Articulo::factory(50)->create();
    }
}
