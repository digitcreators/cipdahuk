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
                'name'              => 'required|regex:/^[A-Za-z -]+$/|max:255',
                "email"             => "required",
                'phone'             => 'required|regex:/^[+][0-9]/|min:12',
                "country"           => "required",
                "course_name"       => "required",
                "paper_topic"       => "required",
                "reference_style"    => "required",
                "academic_level"    => "required",
                "academic_level_id"  => "required",
                "number_of_pages"   => "required",
                "deadline"          => "required",
                "deadline_id"          => "required",
                "detail"            => "nullable|string",

                'emailAttachments.*' => 'nullable|file|mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,webp,gif,sav,sps,spv,spo,mat,zip,rar|max:250000',

        ];
    }
}


