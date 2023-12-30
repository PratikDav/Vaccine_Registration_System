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
        Schema::create('vaccine_centers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vaccination_center_id')->unique();
            $table->string('vaccination_center_name');
            $table->date('established_date');
            $table->string('divisions');
            $table->string('district');
            $table->string('sub_district');
            $table->string('union');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccine_centers');
    }
};
