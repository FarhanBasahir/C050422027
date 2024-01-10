<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRegisterRequest extends FormRequest
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
            'email' => 'required|string',
            'motivasi' => 'required|string',
            'pengalaman_organisasi' => 'required|string',
            'pengalaman_kepanitiaan' => 'required|string',
            'motto_hidup' => 'required|string',
            'divisi' => 'required|string',
        ];
    }
}
