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
       $response=$this->post('/pengguna',[
        'name'=>'budi',
        'email'=>'budi021@gmail.com',
        'password'=>'budi123',
        'role'=>'petugas kebun',
       ]);
    //    $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'name', 
            'email', 
            'password',
            'role'
        ]);

        $response->assertStatus(302); // Redirect setelah registrasi berhasil
        $this->assertAuthenticated();
    }
}
