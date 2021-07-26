<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
            'tenChungCu' => ['required', 'min:10', 'max:50'],
            'diaChi' => ['required'],
            'giaBan' => ['numeric'],
            'hinhDaiDien' => ['required',],
            'trangThai' =>  ['required', 'min:0', 'max:3']
        ];
    }
    public function messages()
    {
        return [
            'tenChungCu.required' => 'Vui lòng nhập tên chung cư',
            'diaChi.required' => 'Vui lòng nhập địa chỉ',
            'giaBan.numeric' => 'Giá bán phải là số',
            'hinhDaiDien.required' => 'Hình đại diện phải là link ảnh',
            'trangThai.required' => 'Vui lòng nhập trạng thái',
            'trangThai.min' => 'Trạng thái tối thiểu là 0',
            'trangThai.max' => 'Trạng thái tối thiểu là 3',

        ];
    }
}
