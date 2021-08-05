<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use Livewire\Livewire;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use App\Http\Livewire\CreatePatient;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientTest extends TestCase
{
    use RefreshDatabase;

    public function test_only_patient_screen_can_be_rendered_to_a_logged_in_user()
    {
        $role = Role::create(['name' => 'Admin']);

        $response = $this->get('/patients');

        $response->assertStatus(302);

        $user = User::factory()->create();

        Auth::loginUsingId($user->id);

        $response = $this->get('/patients');

        $response->assertStatus(200);
    }

    public function test_users_can_be_added_by_logged_in_user()
    {
        $faker = Faker::create();

        $role = Role::create(['name' => 'Admin']);

        $user = User::factory()->create();

        Auth::loginUsingId($user->id);

        $gender_options = ['male', 'female'];

        $gender = array_rand((array) $gender_options, (int) 1);

        $response = Livewire::test(CreatePatient::class)
            ->set([
                'form.name' => $faker->name(),
                'form.email' => $faker->unique()->safeEmail(),
                'form.phone' => $faker->e164PhoneNumber,
                'form.gender' => $gender_options[$gender],
                'form.dob' => Carbon::parse($faker->dateTimeBetween('1960-01-01', '2020-12-31'))
            ])
            ->call('submit');

        $response->assertStatus(200);
    }
}
