<?php
use Pest\Laravel;
it('create user', function () {
    $user = [
        'name' => 'Rasni Nathees',
        'email' => 'rasni@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ];

    $response = Laravel\post('/user', $user);

    $response->assertStatus(302);
    $response = Laravel\followingRedirects($response);
    $response->assert;
});
