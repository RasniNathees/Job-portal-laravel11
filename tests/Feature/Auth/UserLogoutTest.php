<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

it('User can logout',function(){
    $user =User::factory()->create();
    expect($user)->toBeRedirectFor('/logout','post');
    expect(Auth::check())->toBeFalse();
});