<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCustomer extends FormRequest
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
     * 取得驗證規則
     * Get the validation rules that apply to the request.
     * 
     * @return array
    */
    public function rules()
    {
        return [
        //填入要求的規則
        'Name' => 'required|string',
        'Phone' => 'required|string'
        ];
    }
    /** 自定義錯誤訊息
     * @return array
     */ 
    public function messages(){
        return [
        'required' => '不可為空白',
        'string' => '必須為字串'
        ];
    }
}
