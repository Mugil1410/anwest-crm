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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('no_of_opening',100);
            $table->string('company_posted', 100);
            $table->string('Skills', 500);
            $table->string('exp_needed', 10);
            $table->string('qualification', 80);
            $table->string('description', 5000);
            $table->text('location');
            $table->date('job_close');
            $table->enum('Job_post', ['Active', 'Inactive']);
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
        Schema::dropIfExists('jobs');
    }
};
