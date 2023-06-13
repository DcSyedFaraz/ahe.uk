<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QueryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fname'      => 'required|regex:/^[A-Za-z -]+$/|max:255',
            'lname'      => 'required|regex:/^[A-Za-z -]+$/|max:255',
              'phone'     => 'required|regex:/^[+][0-9]/|min:12',
              'subject'   => 'required|string',
              'detail'    => 'required|nullable',
              'deadline'    => 'required|'
        ];
    }
}
