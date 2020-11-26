<?php

namespace Edupham\Api\App\Http\Requests\User;

use Edupham\Api\App\Helpers\Constants;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
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
            'username' => [
                'required',
                function($attibute, $value, $fail){}
            ],
            'password' => [
                'required',
                function($attibute, $value, $fail) {}
            ]
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => 'Truyền thiếu tham số username.',
            'password.required' => 'Truyền thiếu tham số password.'
        ];
    }

    /**
     * @param Validator $validator
     * @return \Illuminate\Http\JsonResponse
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'code' => 422,
                'message' => $validator->errors()->first(),
                'data' => null
            ])
        );
    }
}
