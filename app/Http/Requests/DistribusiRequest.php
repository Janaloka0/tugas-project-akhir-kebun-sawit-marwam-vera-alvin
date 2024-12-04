<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistribusiRequest extends FormRequest
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
            'produksi_id' => 'required|integer',
            'tujuan' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'tanggal_distribusi' => 'required|date',
        ];
    }
    public function message(): array
    {
      return [
            'produksi_id.required' => 'id produksi harus diisi',
            'tujuan.required' => 'tujuan harus diisi',
            'tujuan.max' => 'tujuan tidak boleh lebih dari 255 karakter',
            'jumlah.required' => 'jumlah harus diisi',
            'tanggal_distribusi.required' => 'tanggal distribusi harus diisi',
      ];
    }
}
