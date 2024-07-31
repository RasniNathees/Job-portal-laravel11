<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;

test('Is Job has employer', function () {
   $user = User::factory()->create();
   $employer = Employer::factory()->create(['user_id'=>$user->id]);
   
   expect($employer->user->is($user))->toBeTrue();
});
test('Is employer has a job', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id'=>$employer->id]);
    
    expect($employer->job->contains($job))->toBeTrue();
 });
 