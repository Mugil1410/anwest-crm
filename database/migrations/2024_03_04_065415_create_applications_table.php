<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('applying_for', 100);
            $table->string('applicant_name', 100);
            $table->string('applicant_mobile', 15);
            $table->string('applicant_email', 100);
            $table->string('qualification', 50);
            $table->text('skills')->nullable();
            $table->integer('exp_yr')->nullable();
            $table->string('designation', 50)->nullable();
            $table->string('last_employer', 100)->nullable();
            $table->string('joining_date')->nullable();
            $table->string('profile_link', 255)->nullable();
            $table->string('Resume_path', 400)->nullable();
            $table->unsignedBigInteger('Job_ID');
            $table->enum('Status', ['Applied', 'Shortlisted', 'Rejected', 'Accepted']);
            $table->enum('application_Status', ['Active', 'Inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
