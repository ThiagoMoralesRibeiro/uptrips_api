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
        Schema::create('destination', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('city');
            $table->string('state');
            $table->timestamps();
        });

        Schema::create('hosting', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['Hotel', 'Hostel', 'Pousada', 'Airbnb', 'Resort']);
            $table->string('phone');
            $table->string('email')->nullable(false);
            $table->integer('price');
            $table->timestamps();

            $table->foreignId('destinationId')->constrained('destination')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosting');
        Schema::dropIfExists('destination');
    }
};
