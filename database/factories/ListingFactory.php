<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ListingFactory extends Factory
{
    protected $model = Listing::class;

    public function definition(): array
    {
        return [
            'beds' => fake()->numberBetween(1,7),
            'baths' => fake()->numberBetween(1,7),
            'area' => fake()->numberBetween(30,400),
            'city' => fake()->city(),
            'code' => fake()->postcode(),
            'street' => fake()->streetName(),
            'street_number' => fake()->numberBetween(10,200),
            'price' => fake()->numberBetween(50_000, 2_000_000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
