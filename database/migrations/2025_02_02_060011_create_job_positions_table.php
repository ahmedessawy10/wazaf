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
        Schema::create('job_positions', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->text('description');
            $table->foreignId('employer_id')->constrained('employers')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('experience_id')->constrained('experience_levels')->onDelete('cascade');
            $table->foreignId('education_id')->constrained('education_levels')->onDelete('cascade');
            $table->date('deadline');
            $table->integer('total_positions')->default(1);
<<<<<<< HEAD
            $table->enum("status", ["open", "closed"])->default("open");
=======
            $table->enum("status", ["open", "closed","pending"])->default("pending");
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
            $table->enum("job_type", ["full_time", "part_time", "freelance", "internship"])->default("full_time");
            $table->string("job_location")->nullable();
            $table->enum("salary_type", ["hourly", "monthly", "yearly", 'project'])->default("monthly");
            $table->string("min_salary")->nullable();
            $table->string("max_salary")->nullable();
<<<<<<< HEAD
            $table->timestamps();
        });
=======
            $table->text('benefits')->nullable();
            $table->text('keywords')->nullable();
            $table->timestamps();
        });
        
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_positions');
    }
};
