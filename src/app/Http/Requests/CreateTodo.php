<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTodo extends FormRequest
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
            'content' => 'required|max:200',
            'deadline' => 'required|date|after_or_equal:today',
        ];
    }

    public function attributes()
    {
        return [
            'content' => 'タスク',
            'deadline' => '期限日',
        ];
    }

    public function messages() 
    {
        return [
            'deadline' => ':attributeには今日以降の日付を入力してください',
        ];
    }
}
