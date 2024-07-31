<?php

use App\Models\Job;
use App\Models\Tag;

it('Is Tag has a specific job', function(){

    $tag = Tag::factory()->create();
    $job = Job::factory()->create();
    $tag->jobs()->attach($job);
    expect($tag->jobs->contains($job->id))->toBeTrue();

});


it('Is Tag has a correct job count', function(){

    $tag = Tag::factory()->create();
    $job = Job::factory()->create();
    $tag->jobs()->attach($job);
    expect($tag->jobs)->toHaveCount(1);

});