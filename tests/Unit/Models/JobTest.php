<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\QueryException;


 
it('Can handle jobs with no employer', function () {
   Job::factory()->create(['employer_id' => null]);
 })->throws(QueryException::class);
 
it('Is Job has employer', function () {
   $employer = Employer::factory()->create();
   $job = Job::factory()->create(['employer_id'=>$employer->id]);
   
   expect($job->employer->is($employer))->toBeTrue();
});

it("Is Job has a specific tag",function(){
   $job = Job::factory()->create(['salary'=>"45568"]);
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

it('Can Job have multiple tags', function () {
   $job = Job::factory()->create();
   $tags = Tag::factory()->count(3)->create();
   $job->tags()->attach($tags);
   
   expect($job->tags->count())->toBe(3);
});


it('can detach a tag from a job', function () {
   $job = Job::factory()->create();
   $tag = Tag::factory()->create();
   $job->tags()->attach($tag);
   $job->tags()->detach($tag);
   expect($job->tags->contains($tag->id))->toBeFalse();
});