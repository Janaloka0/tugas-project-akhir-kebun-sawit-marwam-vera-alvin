<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetugasRequest extends FormRequest
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
            'pengguna_id' => 'required|integer',
            'nama_petugas' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tanggal_bergabung' => 'required|',
        ];
    }
    public function message(): array
    {
        return [
            'pengguna_id.required' => 'Pengguna ID harus diisi.',
            'nama_petugas.required' => 'Nama petugas harus diisi.',
            'jabatan.required' => 'Jabatan harus diisi.',
            'tanggal_bergabung.required' => 'Tanggal Harus diisi'
        ];
    }
}
