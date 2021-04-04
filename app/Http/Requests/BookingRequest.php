<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'id_user' => 'required|int',
            'id_photographer' => 'required|int',
            'is_cancel' => 'required|int',
            'id_voucher' => 'required|int',
            'id_combo' => 'required|int'
        ];
    }
}
