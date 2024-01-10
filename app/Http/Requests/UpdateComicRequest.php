<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            //
            'title' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:255',
            'price' => 'required|min:5|max:255',
            'thumb' => 'required|min:5|max:255',
            'sale_date' => 'required|min:5|max:255',
            'type' => 'required|min:5|max:255',
            'series' => 'required|min:5|max:255'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'il campo titolo deve avere massimo :max caratteri',
            'type.requider' => 'Il campo tipo è obbligatorio',
            'type.max' => 'il tipo non può superare i :max caratteri',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'thumb.max' => 'L\'immagine deve avere :max caratteri',
            'description.required' => 'Descrizione obbligatoria',
            'description.min' => 'La descrizione deve avere :min caratteri',
            'description.max' => 'La descrizione deve avere :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve avere :min caratteri',
            'series.max' => 'La serie deve avere :max caratteri',
            'sale_date.required' => 'La data è obbligatoria',
            'sale_date.date_format' => 'La data AAAA/MM/DD'
        ];
    }
}
