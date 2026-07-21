<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('brand_id')->nullable();
            $table->bigInteger('category_id')->nullable();

            $table->string('model')->nullable();

            $table->year('year')->nullable();

            $table->string('fuel_type')->nullable();

            $table->string('transmission')->nullable();

            $table->integer('kilometers')->default(0);

            $table->decimal('price', 12, 2)->nullable();

            $table->string('registration_no')->nullable();
            $table->string('ownership')->nullable();          // 1st Owner
            $table->string('insurance')->nullable();          // Comprehensive
            $table->date('insurance_valid_till')->nullable();
            $table->string('service_history')->nullable();
            $table->string('accident_history')->nullable();   // No Major Accident

            // Technical Specifications
            $table->string('engine')->nullable();
            $table->string('power')->nullable();
            $table->string('torque')->nullable();
            $table->string('fuel_tank')->nullable();
            $table->string('mileage')->nullable();
            $table->string('drive_type')->nullable();
            $table->string('color')->nullable();

            // Optional Specifications
            $table->string('seating_capacity')->nullable();
            $table->string('body_type')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('boot_space')->nullable();
            $table->string('top_speed')->nullable();
            $table->string('airbags')->nullable();

            $table->text('overview')->nullable();

            $table->string('thumbnail')->nullable();

            $table->text('description')->nullable();

            $table->boolean('featured')->default(0);

            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
