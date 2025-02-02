<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('job_types', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2025_02_02_114703_create_job_types_table.php
            $table->string('name');
            $table->boolean('status')->default(true);
=======
            $table->string('app_name')->default('Wazaf');
            $table->string('app_email')->default('wazaf@example.com');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('theme_color')->default('#000000');

>>>>>>> e3df90c78be93e110c99a167e01e6f7b206a2dfc:database/migrations/2025_01_21_165610_create_app_settings_table.php
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_types');
    }
};
