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
        Schema::create('general_publics', function (Blueprint $table) {
            $table->id();
            $table->string('birth_reg_no',10000)->unique();
            $table->string('nid_no',1000)->unique();
            $table->string('passport_no',1000)->unique();
            $table->string('name');
            $table->string("father_name");
            $table->string("mother_name");
            $table->string('nationality');
            $table->date('dob');
            $table->enum('gender', ["Male", "Female", "Other"])->nullable();
            $table->string('place_of_birth');
            $table->string('permanent_address');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_publics');
    }
};
