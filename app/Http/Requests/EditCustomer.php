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
        ## return false;
        return true;
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

    // public function messages()
    // {
    //     return [
    //         "userId.required" => "使用者 ID 為避填資料",
    //         "userId.exists" => '使用者 ID 必須存在於資料庫中',
    //         "postId.integer" => "文章 ID 必須為數值",
    //         "postId.exists" => "文章 ID 不存在"
    //     ];
    // }

    protected function failedValidation(Validator $validator)
    {
    }
    // 不做任何動作，由 controller 處理: 需要將 getValidatorInstance() 改為 public，
    // 讓 controller 可以取到 validator 實例並進一步得到錯誤訊息
    public function getValidatorInstance()
    {
        return parent::getValidatorInstance();
    }
}

