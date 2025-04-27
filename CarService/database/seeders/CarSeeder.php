<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::create([
            'name' => 'Civic Turbo',
            'brand' => 'Honda',
            'year' => 2022,
            'price' => 520000000,
            'stock' => 10,
            'image' => 'images/civic.jpg',
        ]);

        Car::create([
            'name' => 'Avanza Veloz',
            'brand' => 'Toyota',
            'year' => 2023,
            'price' => 300000000,
            'stock' => 15,
            'image' => 'images/veloz.webp',
        ]);

        Car::create([
            'name' => 'Model 3',
            'brand' => 'Tesla',
            'year' => 2023,
            'price' => 1200000000,
            'stock' => 5,
            'image' => 'images/model3.jpeg',
        ]);

        Car::create([
            'name' => 'Fortuner GR Sport',
            'brand' => 'Toyota',
            'year' => 2022,
            'price' => 670000000,
            'stock' => 7,
            'image' => 'images/fortuner.webp',
        ]);

        Car::create([
            'name' => 'HR-V RS Turbo',
            'brand' => 'Honda',
            'year' => 2023,
            'price' => 480000000,
            'stock' => 8,
            'image' => 'images/hrv.jpg',
        ]);
    }
}
