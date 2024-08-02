<?php

use App\Models\Job;


test('example', function () {
    Job::factory()->create(['title'=>'Developer']);
    Job::factory()->create(['title'=>'Backend']);
  $this->get('/search?search=Developer')
  ->assertStatus(200)
        ->assertViewIs('results')
        ->assertSeeText('Developer')
        ->assertDontseeText('Backend');

});
