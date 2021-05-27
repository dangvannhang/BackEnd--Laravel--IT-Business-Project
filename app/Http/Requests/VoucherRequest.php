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

            'code' => 'required|unique:voucher|min:6|max:20',
            'description' => 'required',
            'count' => 'required|int|min:1', // count so luong cua voucher
            'denomination' => 'required|int|min:1|max:100', // so phan tram duoc giam tren hoa don
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time'

        ];
    }
}
