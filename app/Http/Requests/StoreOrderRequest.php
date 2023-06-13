<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name'              => 'required|regex:/^[A-Za-z -]+$/|max:255',
                "email"             => "required",
                'phone'             => 'required|regex:/^[+][0-9]/|min:12',
                "country"           => "required",
                "paper_type"        => "required",
                // "paper_topic"       => "required",
                "reference_style"   => "required",
                "subject"           => "required",
                "style"             => "required",
                "academic_level"    => "required",
                "number_of_pages"   => "required",
                "deadline"          => "required",
                "detail"            => "nullable|string",
                // 'emailAttachments.*' => 'nullable|file|mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,gif,sav,sps,spv,spo,mat,zip,rar|max:250000',
                // "career_level"      => "required",
                // "select_package"    => "required",
                // "language"          => "required",
                // "spacing"           => "required",

        ];
    }
}
