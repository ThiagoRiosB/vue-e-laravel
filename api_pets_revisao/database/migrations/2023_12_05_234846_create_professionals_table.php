<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('people_id');
            $table->string('speciality', 150);
            $table->string('register', 30);
            $table->foreign('people_id')->references('id')->on('people');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
