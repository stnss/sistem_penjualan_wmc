<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user()->hasAnyPermission(['create-barang', 'update-barang']);
    }
    
    public function rules()
    {
        return [
            'name' => 'required',
            'external_id' => 'required|unique:barangs'
        ];
    }
}
