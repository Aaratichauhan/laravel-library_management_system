<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorebookRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'category_id' => 'required',
            'auther_id' => 'required',
            'publisher_id' => 'required',
        ];
    }
}
