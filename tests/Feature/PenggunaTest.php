<?php

namespace Tests\Feature;

use App\Models\Pengguna;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Contracts\Service\Attribute\Required;
use Tests\TestCase;


class PenggunaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create(): void
    {
        // Data registrasi dengan email yang sama
        $response = $this->postJson('/register', [
            'name' => 'Budi',
            'email' => 'budi031@gmail.com',  // Email yang sudah terdaftar
            'password' => 'budi1234',
            'password_confirmation' => 'budi1234',
            
            'role' => 'petugas kebun',
        ]);

        // Mengharapkan status 400 (bad request) karena email sudah terdaftar
        $response->assertStatus(302);

        // Mengharapkan pesan error "Email sudah terdaftar"
        // $response->assertJson([
        //     'message' => 'Email sudah ada',
        // ]);
    }
}
