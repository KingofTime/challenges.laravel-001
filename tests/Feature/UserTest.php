<?php

use App\Models\User;

test('user creation when there is success', function () {
    $payload = [
        'name' => fake()->name(),
        'email' => fake()->email(),
        'password' => fake()->password()
    ];

    $response = $this->post('/api/users', $payload);

    $response->assertCreated();
    $response->assertJsonMissingPath('password');
});

test('user creation the email already exists', function () {
    $email = fake()->email();
    User::factory()->create(['email' => $email]);
    $payload = [
        'name' => fake()->name(),
        'email' => $email,
        'password' => fake()->password()
    ];

    $response = $this->post('/api/users', $payload);

    $response->assertUnprocessable();
    $response->assertJsonValidationErrors('email');
});

