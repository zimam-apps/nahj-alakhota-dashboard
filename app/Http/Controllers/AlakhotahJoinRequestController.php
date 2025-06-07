<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlakhotahJoinRequestRequest;
use App\Models\AlakhotahJoinRequest;

class AlakhotahJoinRequestController extends Controller
{
	public function store(CreateAlakhotahJoinRequestRequest $request)
	{
		$validatedData = $request->validated();

		if ($request->hasFile('personal_id_image')) {
			$personalIdImagePath = $request->file('personal_id_image')->store('personal-id-images', 'public');
			$validatedData['personal_id_image'] = $personalIdImagePath;
		}

		if ($request->hasFile('cv_file')) {
			$cvFilePath = $request->file('cv_file')->store('cv-files', 'public');
			$validatedData['cv_file'] = $cvFilePath;
		} else {
			$validatedData['cv_file'] = null;
		}

		AlakhotahJoinRequest::create($validatedData);

		return redirect()->route('join-request')->with('success', 'تم تقديم طلب الانضمام بنجاح!');
	}
}
