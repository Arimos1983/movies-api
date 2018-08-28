<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviesValidationRules extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('movies')->where('releaseDate', $request->all('releaseDate'))],
             
            "director"=>"required",
            "duration"=>"required|min:1|max:500",
            "releaseDate"=>"required",
            "imageUrl"=> 'url'
        ];
    }
}
