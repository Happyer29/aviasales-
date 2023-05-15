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
        Schema::create('air_carriers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 32);
            $table->string('api_key', 64);
            $table->string('logo');
            $table->timestamps(0);
        }); // TODO all down migrations
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('air_carriers');
    }
};
