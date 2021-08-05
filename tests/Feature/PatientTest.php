<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientTest extends TestCase
{
    use RefreshDatabase;

    public function test_only_patient_screen_can_be_rendered_to_a_logged_in_user()
    {
        $response = $this->get('/patients');

        $response->assertStatus(302);

        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertStatus(200);
    }

    public function test_users_can_be_added_by_logged_in_user()
    {
        $response = $this->get('/patients');

        $response->assertStatus(302);

        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $gender_options = ['male', 'female'];
        $gender = array_rand((array) $gender_options, (int) 1);

        $response = $this->post('/patients/create', [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->e164PhoneNumber,
            'gender' => $gender_options[$gender],
            'dob' => Carbon::parse($this->faker->dateTimeBetween('1960-01-01', '2020-12-31'))
        ]);

        $response->assertStatus(200);
    }
}
