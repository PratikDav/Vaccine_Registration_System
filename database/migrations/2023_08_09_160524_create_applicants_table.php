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
        Schema::create('applicants', function (Blueprint $table) {

            //applicants details
            $table->id();
            $table->string('reg_no');
            $table->string('name');
            $table->date('dob');
            $table->string('age');
            $table->string('nid_no'); //(Foreign Key)
            $table->string("mother_name");
            $table->string("father_name");
            $table->string('holding_no')->nullable();
            $table->string('address')->nullable();
            $table->string('village')->nullable();

            // vaccination center details
            $table->string('vaccination_center_name')->nullable();

            //vaccination volunteer details
            $table->string('vaccination_volunteer_name')->nullable();
            $table->string('vaccination_volunteer_mobile_no')->nullable();

            // vaccination dose issue or taken details
            $table->string('current_dose_no')->default(0);
            $table->date('first_dose_issue_date')->nullable();
            $table->date('second_dose_issue_date')->nullable();
            $table->date('third_dose_issue_date')->nullable();
            $table->date('first_dose_taken_date')->nullable();
            $table->date('second_dose_taken_date')->nullable();
            $table->date('third_dose_taken_date')->nullable();

            // vaccination dose details

            $table->string('dose_no')->nullable();

            $table->string('vaccine_name')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('manufacturing_company')->nullable();

            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('applicants_types');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
