<?php

namespace App\Http\Requests\Lessons;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Rule;

class UpdateLessonRequest extends FormRequest
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
        // $module_id = $this->route('module')->id;
        
        return [
            'name' => 'required|string|max:255',
            'link' => 'required|string',
            'order' => [
                'required',
                'integer',
                // Rule::unique('lessons')
                //     ->where(fn ($q) => $q->where('module_id', $module_id))
                //     ->ignore($this->route('module')->id),
            ],
        ];
    }
}
