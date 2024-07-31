<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobTags = [
            'Full Stack',
            'Back End',
            'Front End',
            'DevOps',
            'Data Scientist',
            'Machine Learning Engineer',
            'Mobile Developer',
            'Cloud Engineer',
            'Cybersecurity Specialist',
            'Network Administrator',
            'Systems Architect',
            'Database Administrator',
            'Software Engineer',
            'Quality Assurance Engineer',
            'UI/UX Designer',
            'Product Manager',
            'Project Manager',
            'Technical Support Engineer',
            'Business Analyst',
            'IT Manager',
            'IT Consultant',
            'Web Developer',
            'AI Specialist',
            'Blockchain Developer',
            'Embedded Systems Engineer',
            'Site Reliability Engineer',
            'Network Engineer',
            'Big Data Engineer',
            'IoT Developer',
            'Software Development Manager'
        ];
        return [
            //
            'name'=>fake()->unique()->randomElement($jobTags)
        ];
    }
}
