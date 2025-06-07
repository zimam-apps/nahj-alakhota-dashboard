<?php

namespace Database\Factories;

use App\Models\AlakhotahJoinRequest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AlakhotahJoinRequestFactory extends Factory
{
	protected $model = AlakhotahJoinRequest::class;

	public function definition(): array
	{
		return [
			'name' => $this->faker->name(),
			'email' => $this->faker->unique()->safeEmail(),
			'mobile' => $this->faker->word(),
			'gender' => $this->faker->word(),
			'birth' => Carbon::now(),
			'blood_type' => $this->faker->word(),
			'city' => $this->faker->city(),
			'uniform_size' => $this->faker->word(),
			'education' => $this->faker->word(),
			'languages' => [],
			'personal_id_image' => $this->faker->word(),
			'cv_file' => $this->faker->word(),
		];
	}
}
