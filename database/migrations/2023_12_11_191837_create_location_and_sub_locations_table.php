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
        Schema::create('location_and_sub_locations', function (Blueprint $table) {
            $table->id();
            $table->string('subcounty')->nullable();
            $table->string('division')->nullable();
            $table->string('location')->nullable();
            $table->string('sublocation')->nullable();
            $table->string('villages')->nullable();
            $table->foreign('id')->references('id')->on('polling_stations');

              // Default Mandatory Fields 
              $table->softDeletes();
              $table->unsignedInteger('created_by')->nullable();
              $table->unsignedInteger('updated_by')->nullable();
              $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_and_sub_locations');
    }
};
