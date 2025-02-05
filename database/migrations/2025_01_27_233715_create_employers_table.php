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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('company_name')->nullable();
            $table->text('about_us')->nullable();
            $table->string('website_url')->nullable();
            $table->text('company_vision')->nullable();
            $table->string('company_email')->nullable();
            $table->year('year_establish')->nullable();
            $table->enum('team_size', ['only_one', '10 Members', '10-20 Members', '20-50 Members', '50-100 Members', '100-200 Members'])->nullable();
            $table->string('logo')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('industry_type')->nullable()->constrained("industries");
            $table->foreignId('organization_type')->nullable()->constrained("organization_types");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
