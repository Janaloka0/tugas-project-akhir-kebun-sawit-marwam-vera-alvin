<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('pengguna')->ignore($this->route('pengguna'))], // Cek email yang unik
            'password' => 'required|min:8|confirmed',
            'role' => 'required|string'
        ];
    }

    public function massage(): array
    {
        return [
            // 'name'=>'name harus diisi',
            // 'email'=>'email harus diisi',
            // 'password'=>'password harus diisi',
            // 'role'=>'role harus diisi',

            'name.required' => 'Nama pengguna harus diisi.',
            'email.required' => 'Email pengguna harus diisi.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password harus memiliki minimal 8 karakter.',
            'role.required' => 'Role harus diisi.',
        ];

    }
}
