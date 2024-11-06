<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatebookRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'category_id' => 'required',
            'author_id' => 'required',
            'publisher_id' => 'required',
        ];
    }
}
