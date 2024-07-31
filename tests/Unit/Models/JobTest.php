<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

it('Is Job has employer', function () {
   $employer = Employer::factory()->create();
   $job = Job::factory()->create(['employer_id'=>$employer->id]);
   
   expect($job->employer->is($employer))->toBeTrue();
});

it("Is Job has a specific tag",function(){
   $job = Job::factory()->create();
   $tag = Tag::factory()->create();
   $job->tags()->attach($tag);
   expect($job->tags->contains($tag->id))->toBeTrue();
});

it("Is Job has a correct tag count", function(){
   $job = Job::factory()->create();
   $tag = Tag::factory()->create();
   $job->tags()->attach($tag);
   expect($job->tags)->toHaveCount(1);
});