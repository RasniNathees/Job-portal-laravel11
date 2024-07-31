<?php

use App\Models\Employer;
use App\Models\Job;

test('Is Job has employer', function () {
   $employer = Employer::factory()->create();
   $job = Job::factory()->create(['employer_id'=>$employer->id]);
   
   expect($job->employer->is($employer))->toBeTrue();
});

it("is Job has tag",function(){
   $job = Job::factory()->create();
   $job->tag('front end');
   expect($job->tags)->toHaveCount(1);
});