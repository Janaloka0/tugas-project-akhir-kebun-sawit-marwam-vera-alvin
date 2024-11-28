<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Pengguna extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama'=>required(),
            'email'=>required(),
            'password'=>required(),
            'role'=>required(),
        ];
    }

    public function massage(): array
    {
        return [
            'nama'=>'nama harus diisi',
            'email'=>'email harus diisi',
            'password'=>'password harus diisi',
            'role'=>'role harus diisi',
        ];

    }
}