<?php

namespace Database\Factories;

use App\Enums\RecordType;
use App\Models\Device;
use App\Models\Journey;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTime(),
            'record_type' => RecordType::manual,
            'journey_id' => Journey::factory(),
            'user_id' => User::factory(),
        ];
    }
}
