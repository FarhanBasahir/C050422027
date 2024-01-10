<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
            'nama_lengkap' => 'required|string',
            'nama_panggilan' =>'required|string',
            'ttl' => 'required|string',
            'alamat_asal' => 'required|string',
            'alamat_banjarmasin' => 'required|string',
            'email' => 'string',
            'motivasi' => 'string',
            'pengalaman_organisasi' => 'string',
            'pengalaman_kepanitiaan' => 'string',
            'motto_hidup' => 'string',
            'divisi' => 'string',
        ];
    }
}
