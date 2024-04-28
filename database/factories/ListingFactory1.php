<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ListingFactory1 extends Factory
{
    protected $model = Listing::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'beds' => $this->faker->randomNumber(),
            'baths' => $this->faker->randomNumber(),
            'area' => $this->faker->randomNumber(),
            'city' => $this->faker->city(),
            'code' => $this->faker->word(),
            'street' => $this->faker->streetName(),
            'street_number' => $this->faker->streetName(),
            'price' => $this->faker->randomNumber(),
        ];
    }
}
