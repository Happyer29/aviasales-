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
        Schema::create('airplanes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->unsignedBigInteger('airplane_model_id')
                ->references('id')
                ->on('airplane_models')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('airplanes', function (Blueprint $table) {
            $table->dropForeign(['airplane_model_id']);
            $table->dropColumn(['id', 'name']);
        });
        Schema::dropIfExists('airplanes');
    }
};
