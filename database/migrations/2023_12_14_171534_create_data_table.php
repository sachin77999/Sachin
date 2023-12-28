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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('fullnames')->nullable();
            $table->string('nickname')->nullable();
            $table->enum('gender',['male','female'])->default('male');
            $table->string('occupation')->nullable();
            $table->string('workplace')->nullable();
            $table->string('phonesafaricom')->nullable();
            $table->string('phoneairtel')->nullable();
            $table->string('idno')->nullable();
            $table->string('facebookid')->nullable();
            $table->string('ageset')->nullable();
            $table->string('ward')->nullable();
            $table->string('location')->nullable();
            $table->string('sublocation')->nullable();
            $table->string('village')->nullable();
            $table->string('pollingstation')->nullable();
            $table->string('nfluencelocality')->nullable();
            $table->string('influenceother')->nullable();
            $table->string('supportlevel')->nullable();
            $table->string('remarks')->nullable();
            $table->string('positionnominated')->nullable();

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
        Schema::dropIfExists('data');
    }
};
