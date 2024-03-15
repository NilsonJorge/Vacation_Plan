<?php

namespace Tests\Feature;

use App\Models\Holiday;
use App\Models\User;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HolidayControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_authenticated_request_all()
    {
        // Crie um usuário para autenticação
        $user = User::factory()->create();

        // Autentique o usuário e obtenha um token de acesso
        Passport::actingAs($user);

        // Faça uma solicitação autenticada para a sua API
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $user->createToken('TestToken')->accessToken,
            'Accept' => 'application/json',
        ])->getJson('/api/holiday');

        // Verifique se a solicitação foi bem-sucedida
        $response->assertStatus(200);
    }

    public function test_authenticated_create()
{
    // New user for authetication
    $user = User::factory()->create();


    Passport::actingAs($user);

    // New data
    $holidayData = [
        'title' => 'Test Holiday',
        'description' => 'Test description',
        'date' => '2024-03-15',
        'location' => 'Test Location',
        'participants' => 'Test Participants'
    ];

    
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $user->createToken('TestToken')->accessToken,
        'Accept' => 'application/json',
    ])->postJson('/api/holiday', $holidayData);

   
    $response->assertStatus(201);

    
    $response->assertJson([
        'message' => 'Holiday created successfully'
    ]);
}
}
