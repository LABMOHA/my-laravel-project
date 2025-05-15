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
        Schema::create('job_saved', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_person');
            $table->unsignedBigInteger('id_job');
            $table->timestamps();
            $table->unique(['id_person', 'id_job']);

            $table->foreign('id_person')->references('id')->on('persons');
            $table->foreign('id_job')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_saved');
    }
};
