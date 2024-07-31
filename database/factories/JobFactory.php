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
        $shedule = ['Full Time','Part Time'];
        $location = ['Remote','Onsite','Hybrid'];
        return [
            //
            'title'=>fake()->jobTitle(),
            'salary'=>mt_rand(20000000,40000000)/100,
            'location'=>$location[array_rand( $location )],
            'schedule'=>$shedule[array_rand($shedule)],
            'url'=> fake()->url(),
            'featured'=>(bool)mt_rand(0,1),
            'employer_id'=>Employer::factory()->create()
        ];
    }
}
