<?php

namespace App\Http\Requests\Bootcamp;

use Illuminate\Foundation\Http\FormRequest;

class BootcampRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'kategori_id'               => 'required',
            'mentor_id'                 => 'required',
            'nama_bootcamp'             => 'required|unique:bootcamps',
            'harga'                     => 'required',
            'kuota'                     => 'required',
            'deskripsi'                 => 'required',
            'thumbnail'                 => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kategori_id.required'      => 'Pilih kategori bootcamp',
            'mentor_id.required'        => 'Pilih mentor bootcamp',
            'nama_bootcamp.required'    => 'Masukkan nama kelas bootcamp',
            'nama_bootcamp.unique'      => 'Kelas bootcamp sudah ada',
            'harga.required'            => 'Masukkan harga bootcamp',
            'kuota.required'            => 'Masukkan kuota bootcamp',
            'deskripsi.required'        => 'Masukkan deskripsi bootcamp',
            'thumbnail.required'        => 'Upload thumbnail bootcamp',
        ];
        
    }
}
