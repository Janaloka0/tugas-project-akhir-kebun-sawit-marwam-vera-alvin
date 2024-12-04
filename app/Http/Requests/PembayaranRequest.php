<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembayaranRequest extends FormRequest
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
            'id_produksi'=>'required|numeric',
            'jumlah_pembayaran'=>'required|numeric',
            'tanggal_pembayaran'=>'required|date',
            'metode_pembayaran'=>'required',
        ];
    }

    public function massage(): array
    {
        return[
            'id_produksi.required'=>'isi id produk',
            'jumlah_pembayaran.required'=>'masukan jumlah pembayaran',
            'tanggal_pembayaran.required'=>'tanggal pembayaran ',
            'metode_pembayaran.required'=>'pilih metode pembayaran',
        ];
    }

}
