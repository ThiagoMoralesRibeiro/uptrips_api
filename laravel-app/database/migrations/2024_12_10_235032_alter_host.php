<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('accommodation', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('destination', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('hosting', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('tour', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('trip_package', function (Blueprint $table) {
            $table->text('description')->change();
        });
        Schema::table('accommodation', function (Blueprint $table) {
            $table->text('description')->change();
        });

        Schema::table('trip_package', function (Blueprint $table) {
            $table->string('image2_path')->nullable()->change();
            $table->string('image3_path')->nullable()->change();
            $table->string('image4_path')->nullable()->change();
            $table->string('image5_path')->nullable()->change();
            $table->string('image6_path')->nullable()->change();
            $table->string('image7_path')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
