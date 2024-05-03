<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'CH-9090',
            'name' => 'Jordan 1',
            'price' => 2500000,
            'desc' => $faker->text(200),
            'stock' => 10
        ]);

        Item::query()->create([
            'unit_id' => 2,
            'code' => 'CH-9191',
            'name' => 'New balance 327',
            'price' => 1500000,
            'desc' => $faker->text(200),
            'stock' => 15
        ]);

        Item::query()->create([
            'unit_id' => 3,
            'code' => 'CH-9292',
            'name' => 'Air force 1 white',
            'price' => 1300000,
            'desc' => $faker->text(200),
            'stock' => 50
        ]);

        Item::query()->create([
            'unit_id' => 11,
            'code' => 'CH-9393',
            'name' => 'Air force 1 black',
            'price' => 1250000,
            'desc' => $faker->text(200),
            'stock' => 23
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'CH-9494',
            'name' => 'Adidas samba',
            'price' => 1200000,
            'desc' => $faker->text(200),
            'stock' => 35
        ]);
    }
}
