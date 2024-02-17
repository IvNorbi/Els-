<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMovieRequest extends FormRequest
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
    /*public function rules(): array
    {
        return [
            'name' => ['required','unique:movies,name,NULL,release_year']
            
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Kötelező címet megadni'
        ];
    }*/


public function rules(): array
{
    return [
        'name' => ['required', Rule::unique('movies', 'name')
            ->where(function ($query) {
                $query->where('release_year', $this->input('release_year'));    // Ellenőrizzük, hogy a megadott című filmek között van-e már olyan, aminek a dátuma megegyezik
            })
            ->ignore($this->route('movie')),    // Kizárjuk az aktuális film rekordját az ellenőrzésből
        ],
        'release_year' => 'required|int',
    ];
}

}
