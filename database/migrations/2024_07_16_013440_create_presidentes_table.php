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
        Schema::create('presidentes', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('identificacionpresidente');
            $table->string('nombrepresidente');
            $table->string('apellidopresidente');  
            $table->date('nacimientopresidente');
            $table->integer('añopresidente');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presidentes');
    }
};
