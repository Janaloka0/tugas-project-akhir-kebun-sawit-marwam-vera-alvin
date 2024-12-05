<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class PenggunaRequest extends FormRequest
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
        $id = $this->route('pengguna');
        // $email = request('email');
        return [
            'name' => 'required|string|max:255',
            'email' => 
            [
                'required','email','max:255','unique:pengguna,email,' // Pastikan email unik, kecuali untuk data yang sedang diedit
            ],
            'password' => $this->isMethod('post') ? 'required|min:8|confirmed' : 'nullable|min:8|confirmed',
            'role' => 'required|in:admin,petugas kebun,manajer',
        ];
    }

    public function message(): array
    {        
        return [
            'name.required' => 'Nama pengguna harus diisi.',
            'name.max' => 'Nama pengguna tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email pengguna harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password harus memiliki minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'role.required' => 'Role harus dipilih.',
            'role.in' => 'Role tidak valid.',
        ];
    }
}