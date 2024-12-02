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
        $response = $this->get('/pengguna',[
            'name'=>'',
            'email'=>'budi021@gmail.com',
            'password'=>'budi123',
            'role'=>'petugas kebun',
        ]);

        $response->assertStatus(201);
    }
}
