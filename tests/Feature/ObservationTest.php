<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use Livewire\Livewire;
use App\Models\Patient;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use App\Http\Livewire\CreatePatient;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Livewire\CreateObservation;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ObservationTest extends TestCase
{
    use RefreshDatabase;

    public function test_only_patient_screen_can_be_rendered_to_a_logged_in_user()
    {
        $role = Role::create(['name' => 'Admin']);

        $response = $this->get('/observations');

        $response->assertStatus(302);

        $user = User::factory()->create();

        Auth::loginUsingId($user->id);

        $response = $this->get('/observations');

        $response->assertStatus(200);
    }

    public function test_users_can_be_added_by_logged_in_user()
    {
        $faker = Faker::create();

        Role::create(['name' => 'Admin']);

        $user = User::factory()->create();
        $patient = Patient::factory()->create();

        Auth::loginUsingId($user->id);


        $response = Livewire::test(CreateObservation::class)
            ->set([
                'form.patient_id' => $patient->id,
                'form.user_id' => $user->id,
                'form.systolic' => $faker->numberBetween(60, 100),
                'form.diastolic' => $faker->numberBetween(10, 50),
                'form.category' => $faker->text(14),
                'form.date' => now()
            ])
            ->call('submit');

        $response->assertStatus(200);
    }
}
