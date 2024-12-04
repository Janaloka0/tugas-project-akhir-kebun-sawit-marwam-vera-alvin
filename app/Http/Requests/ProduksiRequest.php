<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduksiRequest extends FormRequest
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
            'kebun_id'=>'required|numeric',
            'jumlah_tandan'=>'required|numeric',
            'berat_total'=>'required|numeric',
            'tanggal_panen'=>'required|date'
        ];
    }

    public function message(): array{
        return[
            'kebun_id.required'=>'Kebun harus diisi',
            'jumlah_tandan.required'=>'Jumlah tandan harus diisi',
            'berat_total.required'=>'Berat total harus diisi',
            'tanggal_panen.required'=>'Tanggal panen harus diisi',

        ];
    }
}
