<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaporanRequest extends FormRequest
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
            'kebun_id' => 'required|integer',
            'file_path' => 'required|string|max:255',
            'file_type' => 'required|string|max:255',
            'tanggal_laporan' => 'required|date',
        ];
    }
    public function message(): array
    {
        return [
            'kebun_id' => 'required|integer',
            'file_path' => 'required',
            'file_type' => 'required',
            'tanggal_laporan' => 'required|date',
        ];
    }
}
