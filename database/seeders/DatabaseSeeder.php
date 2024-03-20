<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Flavor;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'password' => 'admin123',
            'first_name' => 'Admin',
            'last_name' => 'Strator',
            'street' => 'samwer',
            'barangay' => 'sa',
            'city' => 'pinas',
            'landmark' => 'Secret',
            'email' => 'admin@gmail.com',
            'mobile_number' => '09282125111',
            'admin' => true,
        ]);

        User::create([
            'username' => 'aikhen',
            'password' => '123456',
            'first_name' => 'Aikhen',
            'last_name' => 'Osuna',
            'street' => 'somewhere',
            'barangay' => 'in',
            'city' => 'philippines',
            'landmark' => 'malapit kay denis ',
            'email' => 'aikhen@email.com',
            'mobile_number' => '09876543210',
            'admin' => false,
        ]);

        User::factory()->create();

        Flavor::create([
            'slug' => 'chocolate',
            'name' => 'chocolate',
        ]);
        Flavor::create([
            'slug' => 'strawberry',
            'name' => 'strawberry',
        ]);
        Flavor::create([
            'slug' => 'vanilla',
            'name' => 'vanilla',
        ]);
        Flavor::create([
            'slug' => 'mocha',
            'name' => 'mocha',
        ]);

        Product::create([
            'thumbnail' => 'bento_1.jpg',
            'name' => 'bento',
            'slug' => 'bento',
            'description' => 'Bento box cakes are mini cakes with minimalist cake design, often with a simple piped drawing or a short message. They are cute, small, addictively delicious and highly customisable in design, colours and flavour.',
            'price' => 280,
        ]);
        Product::create([
            'thumbnail' => 'bento_grande_1.jpg',
            'name' => 'bento grande',
            'slug' => 'bento-grande',
            'description' => 'Much like bento cakes, but bigger.',
            'price' => 400,
        ]);
        Product::create([
            'thumbnail' => 'flower_bento_box_1.jpg',
            'name' => 'bento flower box',
            'slug' => 'bento-flower-box',
            'description' => 'Flower bento boxes are the largest cake that we offer.',
            'price' => 899,
        ]);
    }
}
