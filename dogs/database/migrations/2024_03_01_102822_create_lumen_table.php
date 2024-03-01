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
        Schema::create('lumen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('breed');
            $table->integer('age');
            $table->integer('image_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lumen');
    }
};
