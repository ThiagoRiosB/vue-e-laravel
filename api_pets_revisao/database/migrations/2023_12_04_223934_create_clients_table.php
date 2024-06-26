<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('people_id');
            $table->boolean('bonus')->default(false);
            $table->timestamps();
            $table->foreign('people_id')->references('id')->on('people');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
