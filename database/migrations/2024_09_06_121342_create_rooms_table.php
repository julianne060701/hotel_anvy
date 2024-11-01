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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('unit');
            $table->integer('capacity');
            $table->integer('bed_type_id');
            $table->integer('rate');
            $table->string('Status');
            $table->integer('pts_earned');
            $table->integer('pts_value');
            $table->string('room_type');
            $table->integer('room_number');
            $table->timestamps();
            $table->string('room_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
