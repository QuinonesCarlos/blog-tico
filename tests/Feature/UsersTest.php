<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    /** @test */
    public function authenticated_to_a_user()
    {
        $user = create('App\User', [
            "email" => "user@mail.com"
        ]);

        $this->get('/login')->assertSee('Login');
        $credentials = [
            "email" => "user@mail.com",
            "password" => "secret"
        ];

        $response = $this->post('/login', $credentials);
        $response->assertRedirect('/admin');
        $this->assertCredentials($credentials);
    }

    /** @test */
    public function not_authenticate_to_a_user_with_credentials_invalid()
    {
        $user = create('App\User', [
            "email" => "user@mail.com"
        ]);
        $credentials = [
            "email" => "users@mail.com",
            "password" => "secret"
        ];

        $this->assertInvalidCredentials($credentials);
    }

    /** @test */
    public function the_email_is_required_for_authenticate()
    {
        $user = create('App\User');
        $credentials = [
            "email" => null,
            "password" => "secret"
        ];

        $response = $this->from('/login')->post('/login', $credentials);
        $response->assertRedirect('/login')->assertSessionHasErrors([
            'email' => 'The email field is required.',
        ]);
    }

    /** @test */
    public function the_password_is_required_for_authenticate()
    {
        $user = create('App\User', ['email' => 'users@gmail.com']);
        $credentials = [
            "email" => "users@gmail.com",
            "password" => null
        ];

        $response = $this->from('/login')->post('/login', $credentials);
        $response->assertRedirect('/login')
            ->assertSessionHasErrors([
                'password' => 'The password field is required.',
            ]);
    }
}
