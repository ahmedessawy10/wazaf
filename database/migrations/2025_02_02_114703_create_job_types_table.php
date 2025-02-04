<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('job_types', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->boolean('status')->default(true);

<<<<<<< HEAD
            $table->string('app_name')->default('Wazaf');
            $table->string('app_email')->default('wazaf@example.com');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('theme_color')->default('#000000');
=======
            // $table->string('app_name')->default('Wazaf');
            // $table->string('app_email')->default('wazaf@example.com');
            // $table->string('logo')->nullable();
            // $table->string('favicon')->nullable();
            // $table->string('theme_color')->default('#000000');
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_types');
    }
};
