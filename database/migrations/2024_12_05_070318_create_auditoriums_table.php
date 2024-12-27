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
        Schema::create('auditoriums', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string('name')->default("Unnamed Auditorium");
            $table->integer('capacity')->unsigned();
            $table->string('location')->nullable();
            $table->string('description')->nullable();
            $table->string("street")->default("Unnamed Street");
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
            $table->foreignId("bookings_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditoriums');
    }
};
