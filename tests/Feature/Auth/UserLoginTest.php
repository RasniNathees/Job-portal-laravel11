<?php

it('It can visit login page', function () {
    $this->get('/login')
    ->assertStatus(200)
    ->assertsee('Login')
    ->assertsee('Email')
    ->assertsee('Password');
 
});

// it('It can visit login page', function () {
//     $response = $this->get('/login');

//     $response->assertStatus(200);
// });
// it('Validate empty fields', function(){
//     $user = [];

//     $response = $this->post('/login');

//     $response->assert

// });
