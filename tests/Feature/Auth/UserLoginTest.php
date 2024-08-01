<?php

use App\Models\User;

it(' can visit login page', function () {
    $this->get('/login')
        ->assertStatus(200)
        ->assertsee('Login')
        ->assertsee('Email')
        ->assertsee('Register')
        ->assertsee('Password');

});

it(' cannot see post a job or logout', function () {
    $this->get('/login')
        ->assertDontsee('Post a Job')
        ->assertDontsee('Logout');
});

it(' cannot sumbmit with empty data', function () {
    $user = [];
    $this->post('/login', $user)
        ->assertSessionHasErrors(['email', 'password']);
});

it(' cannot sumbmit with password only', function () {
    $user = ['password' => '123456789'];
    $this->post('/login', $user)
        ->assertSessionHasErrors(['email']);
});

it(' cannot sumbmit with  email only', function () {
    $user = ['email' => 'rasni@email'];
    $this->post('/login', $user)
        ->assertSessionHasErrors(['password']);
});
it('cannot sumbmit with  invalilid email only', function () {
    $user = ['email' => 'rasni.com', 'password'=>'123456789'];
    $this->post('/login', $user)
        ->assertSessionHasErrors(['email']);
});

it(' cannot sumbmit with invalid credential', function () {
    $user = ['email' => 'rasni@email.com', 'password'=>'123456789'];
    $this->post('/login', $user)
        ->assertSessionHasErrors([ 'password'=> 'User creedential is invalid']);
});

it('User can login and redirected to home page', function () {
    $user = User::factory()->create([
        'name'=>'rasni',
        'email'=>'rasni@email.com',
        'password'=>'123456789'
    ]);
    $this->post('/login',[ 
        'email'=>'rasni@email.com',
        'password'=>'123456789'
        ])
        ->assertRedirect('/');
        $this->assertAuthenticated();
        $this->assertAuthenticatedAs(User::where('email',$user->email)->first());
        
});
