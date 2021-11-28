<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
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
            $table->string('title')->unique();
            $table->string('skills');
            $table->string('url');
            $table->integer('positions');
            $table->string('experience');
            $table->string('summary');
            $table->string('responsibility_one');
            $table->string('responsibility_two');
            $table->string('responsibility_three');
            $table->string('responsibility_four');
            $table->string('responsibility_five');
            $table->string('requirements_one');
            $table->string('requirements_two');
            $table->string('requirements_three');
            $table->string('requirements_four');
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
}
