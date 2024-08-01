<?php
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;

it('Return successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('Is it paginated and validate from db', function () {
    $tags = Tag::factory(3)->create();
    $jobs = Job::factory(6)->create()->each(function ($job) use ($tags) {
        $tag = $tags->random(3);
        $job->tags()->attach($tag);
    });

    $response = $this->get('/');

    $response->assertViewHas('jobs', function ($viewJobs) use ($jobs) {
       
         return $viewJobs->count() == 5 && $viewJobs->pluck('id')->contains($jobs->first()->id) 
         && $viewJobs->first()->tags->count() == 3; 
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

    $this->actingAs($user)
    ->get('/')
    ->assertDontsee('Login')
    ->assertDontsee('Register')
    ->assertsee('Post a Job')
    ->assertsee('Logout');
});

