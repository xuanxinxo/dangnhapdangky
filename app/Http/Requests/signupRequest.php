<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'age' => 'required|numeric|min:18|max:99',
            'date' => 'string',
            'phone' => 'required|string|max:20',
            'web' => 'string',
            'address' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'vui lòng nhập điền tên đúng',
            'age.numeric' => 'Vui lòng nhập tuổi cho đúng 18<tuổi<99',
            'date.string' => 'Điền lại ngày tháng',
            'phone.sting' => 'Kiểm tra lại số điện thoại',
            'web.string' => 'Kiểm tra lại ký tự',
            'address.string' => 'vui lòng nhập lại địa chỉ',
        ];
    }
}
