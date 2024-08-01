<?php

use App\Models\User;

it('It can visit register page', function () {

    $this->get('/register')
        ->assertStatus(200)
        ->assertDontsee('Logut')
        ->assertDontsee('Post a Job')
        ->assertsee('Login');

});

it('Cannot submit with empty', function () {
    $user = [];
    $this->post('/register', $user)
        ->assertSessionHasErrors(['email', 'password', 'name']);

});

it('Cannot submit without name', function () {
    $user = [
        'name' => '',
        'email' => 'rasni@email.com',
        'password' => '123456789',
        'password_confirmation' => '123456789'
    ];
    $this->post('/register', [$user])
        ->assertSessionHasErrors(['name']);
});

it('Cannot submit without email', function () {
    $user = [
        'name' => 'rasni',
        'email' => '',
        'password' => '123456789',
        'password_confirmation' => '123456789'
    ];
    $this->post('/register', [$user])
        ->assertSessionHasErrors(['email']);
});
it('Cannot submit with invalid email', function () {
    $user = [
        'name' => 'rasni',
        'email' => 'test',
        'password' => '123456789',
        'password_confirmation' => '123456789'
    ];
    $this->post('/register', [$user])
        ->assertSessionHasErrors(['email']);
});

it('Cannot submit without password', function () {
    $user = [
        'name' => 'rasni',
        'email' => 'test',
        'password' => '',
        'password_confirmation' => ''
    ];
    $this->post('/register', [$user])
        ->assertSessionHasErrors(['password']);
});

it('Cannot submit without match password', function () {
    $user = [
        'name' => 'rasni',
        'email' => 'test',
        'password' => '8765432',
        'password_confirmation' => '12345678'
    ];
    $this->post('/register', [$user])
        ->assertSessionHasErrors(['password']);
});

it('Cannot submit with existing email', function () {
    $user = User::factory()->create([
        'name' => 'rasni',
        'email' => 'test@email.com',
        'password' => 'password',
       
    ]);
    $this->post('/register', [$user])
        ->assertSessionHasErrors(['email']);
});


it('Create user and submit', function () {
    // Pest test
    $userData = [
        'name' => 'Rasni ',
        'email' => 'rasni@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ];

    $this->post('/register', $userData)
        ->assertRedirect('/');
    $this->assertAuthenticated();
    $this->assertDatabaseHas('users', [
        'email' => $userData['email'],
    ]);
    $this->assertAuthenticatedAs(User::where('email',$userData['email'])->first());
});
