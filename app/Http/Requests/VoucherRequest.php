<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoucherRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //

            'code' => 'required|unique:voucher',
            'description' => 'required',
            'count' => 'required|int', // count so luong cua voucher
            'denomination' => 'required|int', // so phan tram duoc giam tren hoa don
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time'

        ];
    }
}
