<?php

namespace App\Http\Requests\Lessons;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLessonRequest extends FormRequest
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
        $module_id = $this->route('module')->id;

        return [
            'name' => 'required|string|max:255',
            'order' => [
                'required',
                'integer',
                Rule::unique('lessons')->where(function ($query) use ($module_id) {
                    return $query->where('module_id', $module_id);
                }),
            ],
        ];
    }
}
