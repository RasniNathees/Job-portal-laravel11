<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=>fake()->jobTitle(),
            'salary'=>mt_rand(20000000,40000000)/100,
            'location'=>array_rand(['Remote','Onsite','Hybrid']),
            'schedule'=>array_rand(['Full Time','Part Time']),
            'url'=> fake()->url(),
            'featured'=>(bool)mt_rand(0,1),
            'employer_id'=>Employer::factory()->create()
        ];
    }
}
