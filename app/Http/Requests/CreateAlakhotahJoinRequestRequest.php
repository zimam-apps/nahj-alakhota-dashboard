<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlakhotahJoinRequestRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name' => ['required'],
			'email' => ['required', 'email', 'max:254'],
			'mobile' => ['required'],
			'gender' => ['required'],
			'birth' => ['required', 'date'],
			'blood_type' => ['required'],
			'city' => ['required'],
			'uniform_size' => ['required'],
			'education' => ['required'],
			'languages' => ['nullable', 'array', 'min:1'],
			'personal_id_image' => ['required', 'image', 'max:5000'],
			'cv_file' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5000'],
		];
	}
}
