<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        $prices = [
            [
                'name' => 'Losse wandeling',
                'description' => 'Eén keer wandelen met jouw hond.',
                'price' => 15.00,
                'active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => '4-rittenkaart',
                'description' => 'Vier wandelingen voor een vaste prijs.',
                'price' => 55.00,
                'active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Speurles (privé)',
                'description' => 'Individuele speurles.',
                'price' => 45.00,
                'active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($prices as $price) {
            Price::updateOrCreate(
                ['name' => $price['name']],
                $price
            );
        }
    }
}
