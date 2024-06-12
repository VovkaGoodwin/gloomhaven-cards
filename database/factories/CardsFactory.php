<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CardsFactory extends Factory {
  protected $model = Card::class;

  public function definition(): array {
    return [
      'number' => $this->faker->word(),
      'text' => $this->faker->text(),
      'title' => $this->faker->word(),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ];
  }
}
