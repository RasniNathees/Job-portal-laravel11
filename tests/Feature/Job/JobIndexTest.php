<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;

it('Return successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('test Pagination and JobData', function () {
    $tags = Tag::factory(3)->create();
    $jobs = Job::factory(15)->create()->each(function ($job) use ($tags) {
        $tag = $tags->random(3);
        $job->tags()->attach($tag);
    });

    $response = $this->get('/');

    $response->assertViewHas('jobs', function ($viewJobs)  {
         return $viewJobs->count() <= 10; 
    });

});

it('Is job have a 3 or less tags', function () {
    $tags = Tag::factory(3)->create();
    Job::factory(6)->create()->each(function ($job) use ($tags) {
        $tag = $tags->random(3);
        $job->tags()->attach($tag);
    });

    $response = $this->get('/');

    $response->assertViewHas('jobs', function ($viewJobs)  {
       
         return  $viewJobs->first()->tags->count() <= 3; 
    });

});

it('Acting as a user', function(){
    $user = User::factory()->create();
$employer = Employer::factory()->create();
$employer->user()->associate($user);
    actingAs($user)
    ->get('/')
    ->assertDontsee('Login')
    ->assertDontsee('Register');
   
   
});

it('Has a featured job',function(){

    $this->get('/')
    ->assertViewHas('futuredJobs',function($viewJobs){
        return $viewJobs->count() <= 6; 
    });
});
