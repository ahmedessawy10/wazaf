<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('summary')->nullable();
            $table->string('personal_website')->nullable();
            $table->enum('military_status', ['yes', 'no'])->default('no')->nullable();
            $table->enum('gender', ['male', 'female'])->default('male')->nullable();
            $table->date('date_of_birth');
            $table->boolean('avilability')->default(1)->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('resume')->nullable();
            $table->text('cover_letter')->nullable();
            $table->foreignId("exp_id")->nullable()->canstrained('experience_levels');
            $table->foreignId("edu_id")->nullable()->canstrained('education_levels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
