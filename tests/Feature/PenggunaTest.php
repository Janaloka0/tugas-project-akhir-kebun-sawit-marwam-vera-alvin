<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Contracts\Service\Attribute\Required;
use Tests\TestCase;

class pengguna extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create(): void
    {
    //    $response=$this->postJson('/pengguna',[
    //     'name'=>'budi12',
    //     'email'=>'budi021@gmail.com',
    //     'password'=>'budi',
    //     'role'=>'petugas kebun',
    //    ]);
    // //    $response->assertStatus(302);
    //     $response->assertSessionHasErrors([
    //         'name'=>'', 
    //         'email'=>'', 
    //         'password'=>'',
    //         'role'=>''
    //     ]);

    //     $response->assertStatus(500); // Redirect setelah registrasi berhasil
    //     $this->assertAuthenticated();
        Pengguna::create([
            'nama' => 'Budi',
            'email' => 'budi021@gmail.com',
            'password' => bcrypt('budi123'),
            'role' => 'petugas kebun',
        ]);

        // Data registrasi dengan email yang sama
        $response = $this->postJson('/register', [
            'nama' => 'Budi',
            'email' => 'budi021@gmail.com',  // Email yang sudah terdaftar
            'password' => 'budi123',
            'role' => 'petugas kebun',
        ]);

        // Mengharapkan status 400 (bad request) karena email sudah terdaftar
        $response->assertStatus(400);

        // Mengharapkan pesan error "Email sudah terdaftar"
        $response->assertJson([
            'error' => 'Email sudah terdaftar',
        ]);
    }
}
