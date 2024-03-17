<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'password' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Kötelező nevet megadni',
            'email.required' => 'Kötelező email címet megadni',
            'password.required' => 'Kötelező jelszót megadni',
            'email.unique' => 'Már regisztrált email cím',
            'image.image' => 'Nem megfelelő képformátum.',
            'image.mimes' => 'Nem megfelelő formátum, csak jpeg,png,jpg,gif fogadható el.',
        ];
    }
}
