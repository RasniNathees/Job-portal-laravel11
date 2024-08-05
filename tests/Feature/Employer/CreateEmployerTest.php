<?php
use App\Models\Employer;
use App\Models\user;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

it('Can visit organization create page', function () {
    $user = User::factory()->create();
    actingAs($user)
    ->get('/organization')
        ->assertStatus(200)
        ->assertSeeText('Create Organization');
});

it('Cannot submit with empty data', function () {
    $organization = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'address' => '',
        'city' => '',
        'website' => '',
        'logo' => ''
    ];
    $this->post('/organization', $organization)
        ->assertSessionHasErrors([
            'name',
            'email',
            'phone',
            'address',
            'city',
            'logo'
        ]);

});

it('creates a new employer', function () {
    // Create a user and log them in
    $user = User::factory()->create();
    Auth::login($user);
    Storage::fake('logos');
    // Define the data to be sent in the POST request
    $data = [
        'name' => 'Test Employer',
        'email' => 'test@employer.com',
        'phone' => '1234567890',
        'address' => '123 Employer St',
        'city' => 'Employer City',
        'website' => 'https://www.employer.com',
        'logo' => UploadedFile::fake()->image('logo.png')
    ];

    // Send the POST request to create the employer
    $this->post('/organization', $data)
    ->assertStatus(302);
   

    $this->assertDatabaseHas('employers', [
        'name' => 'Test Employer',
        'email' => 'test@employer.com',
    ]);
    // Storage::disk('public')->assertExists($data['logo']->hashName());
  
});