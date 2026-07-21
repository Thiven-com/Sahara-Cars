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
        Schema::create('enquiries', function (Blueprint $table) {

            $table->id();

            $table->bigInteger('car_id')->nullable();

            $table->string('name')->nullable();

            $table->string('mobile')->nullable();

            $table->string('email')->nullable();

            $table->string('city')->nullable();

            $table->string('enquiry_type')->nullable();

            $table->string('purchase_time')->nullable();

            $table->text('message')->nullable();

            $table->string('status')->default('New');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
