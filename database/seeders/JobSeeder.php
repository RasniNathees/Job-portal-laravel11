<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Job;
class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $tags = Tag::factory(15)->create();
        Job::factory(20)->create()->each(function($job) use($tags) {
            $randomTags = $tags->random(3);
            $job->tags()->attach($randomTags);
        });
        
    }
}
