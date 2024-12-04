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
            'email' => 'budi022@gmail.com',  // Email yang sudah terdaftar
            'password' => 'budi123',
            'role' => 'petugas kebun',
        ]);

        // Mengharapkan status 400 (bad request) karena email sudah terdaftar
        $response->assertStatus(500);

        // Mengharapkan pesan error "Email sudah terdaftar"
        $response->assertJson([
            'message' => 'Email sudah ada',
        ]);
    }
}
