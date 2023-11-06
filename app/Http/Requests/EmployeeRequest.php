<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            
            'empFname' => "required|string",
            'empLname' => "required|string",
            'gender' => "required|in:Male,Female",
            'birthday' => "required|date",
            'age' => "required|int",
            'monthly_salary' => "required|numeric",
        ];

    }

    //customized message
    public function messages()
    {
        
        return [
            'empFname.required' => 'First name field is required.',
            'empFname.string' => 'First name must be alphabet characters only.',
            'empLname.string' => 'Last name must be alphabet characters only.',
            'empLname.required' => 'Last Name field is required.',
            'age.int' => 'Select birthday to identify the right age.',
            'age.required' => 'Select birthday to identify the right age.',
            'gender.in' => 'Select a gender.',
            'monthly_salary.numeric' => 'Monthly salary must be a numeric value.',
            'monthly_salary.required' => 'Monthly salary is required',
        ];
    }

}
