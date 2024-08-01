<?php

use App\Models\User;

it('It can visit login page', function () {
    $this->get('/login')
        ->assertStatus(200)
        ->assertsee('Login')
        ->assertsee('Email')
        ->assertsee('Register')
        ->assertsee('Password');

});

it('It cannot see post a job or logout', function () {
    $this->get('/login')
        ->assertDontsee('Post a Job')
        ->assertDontsee('Logout');
});

it('It cannot sumbmit with empty data', function () {
    $user = [];
    $this->post('/login', $user)
        ->assertSessionHasErrors(['email', 'password']);
});

it('It cannot sumbmit with password only', function () {
    $user = ['password' => '123456789'];
    $this->post('/login', $user)
        ->assertSessionHasErrors(['email']);
});

it('It cannot sumbmit with  email only', function () {
    $user = ['email' => 'rasni@email'];
    $this->post('/login', $user)
        ->assertSessionHasErrors(['password']);
});
it('It cannot sumbmit with  invalilid email only', function () {
    $user = ['email' => 'rasni.com', 'password'=>'123456789'];
    $this->post('/login', $user)
        ->assertSessionHasErrors(['email']);
});

it('It cannot sumbmit with invalid credential', function () {
    $user = ['email' => 'rasni@email.com', 'password'=>'123456789'];
    $this->post('/login', $user)
        ->assertSessionHasErrors([ 'password'=> 'User creedential is invalid']);
});

it('User can login and redirected to home page', function () {
    $user = User::factory()->create([
        'email'=>'rasni@email.com',
        'password'=>'123456789'
    ]);
    $this->post('/login',[ 
        'email'=>'rasni@email.com',
        'password'=>'123456789'
        ])
        ->assertRedirect('/');
      
        $this->assertAuthenticatedAs($user);
        
});
