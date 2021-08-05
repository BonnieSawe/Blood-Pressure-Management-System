<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use Livewire\Livewire;
use App\Http\Livewire\Login;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $role = Role::create(['name' => 'Admin']);

        $user = User::factory()->create();

        $response = Livewire::test(Login::class)
            ->set([
                'email' => $user->email,
                'password' => 'password',
            ])
            ->call('submit');


        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard'));
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $role = Role::create(['name' => 'Admin']);
        $user = User::factory()->create();

        $response = Livewire::test(Login::class)
            ->set([
                'email' => $user->email,
                'password' => 'wrong-password',
            ])
            ->call('submit');

        $this->assertGuest();
    }
}
