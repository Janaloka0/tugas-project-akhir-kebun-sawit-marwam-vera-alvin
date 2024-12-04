<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class produksi_request extends FormRequest
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
            'kebun_id'=>'required|numeric',
            'jumlah_tandan'=>'required|numeric',
            'berat_total'=>'required|numeric',
            'tanggal_panen'=>'required|date',
        ];
    }

    public function message(): array
    {
        return[
            'kebun_id.required'=>'isi id kebun',
            'jumlah_tandan.required'=>'jumlah tandan harus di isi',
            'berat_total.required'=>'berat total',
            'tanggal_panen.required'=>'tanggal panen',
        ];
    }
}
