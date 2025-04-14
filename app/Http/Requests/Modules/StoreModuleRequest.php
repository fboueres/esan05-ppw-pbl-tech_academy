<?php

namespace App\Http\Requests\Modules;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Rule;

class StoreModuleRequest extends FormRequest
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
        // $course_id = $this->route('course')->id;

        return [
            'name' => 'required|string|max:255',
            'order' => [
                'required',
                'integer',
                // Rule::unique('modules')->where(function ($query) use ($course_id) {
                //     return $query->where('course_id', $course_id);
                // }),
            ],
        ];
    }
}
