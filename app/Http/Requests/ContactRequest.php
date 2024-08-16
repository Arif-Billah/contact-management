<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->id;
        $rules = [
            'name' => 'required|string|max:100',
            "phone"=>"nullable",
            "address"=>"nullable",
           
        ];
        if ($this->isMethod('post')) {
            // Rules for creating a new user
            $rules['email'] = 'required|email|unique:contacts,email';
        } elseif ($this->isMethod('put') || $this->isMethod('patch')) {
            // Rules for updating an existing user
            $rules['email'] = 'required|email|unique:users,email,' . $id;
        }

        return $rules;
        
       
    }
}