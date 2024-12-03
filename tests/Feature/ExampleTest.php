<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->postJson('/pengguna',[
            'name'=>'budi12',
        'email'=>'budi021@gmail.com',
        'password'=>'budi',
        'role'=>'petugas kebun',
        ]);

        $response->assertStatus(405);
    }
}
