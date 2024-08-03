<?php

it('Can visit organization create page', function () {
    $this->get('/organization')
     ->assertStatus(200)
     ->assertSeeText('Create Organization');
});
