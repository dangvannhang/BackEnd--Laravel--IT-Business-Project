<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Regex;
// use App\Http\Requests\registerRequest;
class RegisterRequest extends FormRequest
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
            'email' => 'required|email|unique:user',
            'password' => 'required|min:6',
            'nickname' => 'required|min:10|max:50',
            'username' => 'required|max:20|unique:user|regex:/^[a-zA-Z0-9]{4,10}$/',
            'phone'    => 'required|regex:/(0)[0-9]{9}$/|unique:user|numeric'
        ];
    }
}
