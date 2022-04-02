<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // $expiredValidation = date('Y-m', time());
        return [
            'name'  => 'required|String',
            'email' => 'required|email|unique:users,email,' . Auth::id() . ',id',
            'occupation'    => 'required|String',
            'phone'    => 'required|String',
            'address'    => 'required|String',
            'discount'  => 'nullable|string|exists:discounts,code,deleted_at,NULL'
        ];
    }
}
