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
        Schema::create('vaccination_volunteers', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('volunteer_id')->unique();
            $table->string('volunteer_name')->nullable();
            $table->string('volunteer_mobile_no')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('union')->nullable();
            $table->string('center_id');
            $table->string('center_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination_volunteers');
    }
};
