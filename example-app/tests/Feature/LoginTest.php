<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_successful_login()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect('/');
    }

    public function test_failed_login_with_invalid_email()
    {
        $this->post('/login', [
            'email' => 'invalid@email.com',
            'password' => 'password',
        ])->assertSessionHasErrors(['email']);
    }

    public function test_failed_login_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'invalid',
        ])->assertSessionHasErrors(['password']);
    }
}
