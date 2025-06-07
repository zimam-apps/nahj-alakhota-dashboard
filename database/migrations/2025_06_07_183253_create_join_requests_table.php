<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up(): void
	{
		Schema::create('alakhotah_join_requests', function (Blueprint $table) {
			$table->id();
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->string('mobile')->nullable();
			$table->string('gender')->nullable();
			$table->date('birth')->nullable();
			$table->string('blood_type')->nullable();
			$table->string('city')->nullable();
			$table->string('uniform_size')->nullable();
			$table->string('education')->nullable();
			$table->json('languages')->nullable();
			$table->string('personal_id_image')->nullable();
			$table->string('cv_file');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down(): void
	{
		Schema::dropIfExists('alakhotah_join_requests');
	}
};
