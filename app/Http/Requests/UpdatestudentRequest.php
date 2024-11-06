<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatestudentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => "required",
            'address' => "required",
            'gender' => "required",
            'class' => "required",
            'age' => "required",
            'phone' => "required",
            'email' => "required|email",
        ];
    }
}
