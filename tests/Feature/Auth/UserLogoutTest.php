<?php

use App\Models\User;

it('User can logout',function(){
    $user =User::factory()->create();
    expect($user)->toBeRedirectFor('/logout','post');
    
});