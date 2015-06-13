<?php

namespace linkshare\Http\Requests;

use linkshare\Http\Requests\Request;

class SubFormRequest extends Request
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
            'name' => 'required|min:3|max:20|alpha_dash|unique:subs'
        ];
    }
}
