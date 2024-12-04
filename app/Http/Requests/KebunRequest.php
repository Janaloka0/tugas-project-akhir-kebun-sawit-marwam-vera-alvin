<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KebunRequest extends FormRequest
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
           'lokasi' => 'required|string|max:255',
           'luas' => 'required|integer',
           'status' => 'required|string|max:255',
           'tanggal_tanam' => 'required|date',
           'tanggal_panen' => 'required|date',
            
        ];
    }
    public function message(): array
    {
        return [
            'lokasi' => 'required|string|max:255',
            'luas' => 'required|integer',
            'status' => 'required|string|max:255',
            'tanggal_tanam' => 'required|date',
            'tanggal_panen' => 'required|date',
        ];
    }
}
