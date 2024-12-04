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
            'produksi_id'=>'required|numeric',
            'jumlah_pembayaran'=>'required|numeric',
            'tanggal_pembayaran'=>'required|numeric',
            'metode_pembayaran'=>'required',
        ];
    }

    public function message(): array
    {        
        return [
            'produksi_id'=>'id produksi harus diisi',
            'jumlah_pembayaran'=>'jumlah pembayaran harus diisi',
            'tanggal_pembayaran'=>'tanggal pembayaran harus diisi',
            'metode_pembayaran'=>'metode pembayaran harus diisi'
        ];
    }
}
