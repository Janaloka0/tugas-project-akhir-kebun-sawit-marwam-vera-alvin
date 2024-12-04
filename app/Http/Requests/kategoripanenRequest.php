<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class kategoripanenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_kategori'=>'required|string|max:255',
            'deskripsi'=>'required|string|max:255',
        ];
    }

    public function massage(): array
    {
        return[
            'nama_kategori.required'=>'nama kategori sudah di isi',
            'deskripsi.required'=>'deskripsi hasil panen bagus',
        ];
    }
}
