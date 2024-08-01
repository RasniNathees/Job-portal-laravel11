<?php

use App\Models\User;

it(' can visit login page')
    ->get('/login')
    ->assertStatus(200)
    ->assertsee('Login')
    ->assertsee('Email')
    ->assertsee('Register')
    ->assertsee('Password');


it(' cannot see post a job or logout')
    ->get('/login')
    ->assertDontsee('Post a Job')
    ->assertDontsee('Logout');


it(' cannot sumbmit with empty data')
    ->post('/login', $user = [])
    ->assertSessionHasErrors(['email', 'password']);


it(' cannot sumbmit with password only')
    ->post('/login', $user = ['password' => '123456789'])
    ->assertSessionHasErrors(['email']);


it(' cannot sumbmit with  email only')
    ->post('/login', $user = ['email' => 'rasni@email'])
    ->assertSessionHasErrors(['password']);

it('cannot sumbmit with  invalilid email only')
    ->post('/login', $user = ['email' => 'rasni.com', 'password' => '123456789'])
    ->assertSessionHasErrors(['email']);


it(' cannot sumbmit with invalid credential')
    ->post('/login', $user = ['email' => 'rasni@email.com', 'password' => '123456789'])
    ->assertSessionHasErrors(['password' => 'User creedential is invalid']);


it('User can login and redirected to home page', function () {
    $user = User::factory()->create([
        'name' => 'rasni',
        'email' => 'rasni@email.com',
        'password' => '123456789'
    ]);
    $this->post('/login', [
        'email' => 'rasni@email.com',
        'password' => '123456789'
    ])
        ->assertRedirect('/');
    $this->assertAuthenticated();
    $this->assertAuthenticatedAs(User::where('email', $user->email)->first());

});

it('Redirect to home page if he already logged in',function(){
    $user = User::factory()->create();
    $this->actingAs($user)
    ->get('/login')
    ->assertStatus(302);
});