<?php

namespace App\Http\Requests\Skills;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'location' => ['required', 'string', 'min:3', 'max:255'],
            'education' =>  ['required', 'string', 'min:3', 'max:255'],
            'experience' => ['required', 'numeric', 'min:1'],
            'achievements' =>  ['required', 'string', 'min:3', 'max:255'],
            'skills_list' => ['required', 'string', 'min:3', 'max:255'],
            'description' =>  ['required', 'string', 'min:3', 'max:255'],
        ];
    }

    public function attributes(): array
    {
        return [
            'location' => 'Расположение',
            'education' => 'Образование',
            'experience' => 'Опыт',
            'achievements' => 'Достижения',
            'skills_list' => 'Список навыков',
            'description' => 'Описание'
        ];
    }
}
