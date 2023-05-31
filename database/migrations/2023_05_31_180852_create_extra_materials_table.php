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
        Schema::create('extra_materials', function (Blueprint $table) {
            $table->id('id');
            $table->string('name',45);
            $table->string('body',45);
            $table->bigInteger('Tool_idTool')->unsigned();
            $table->foreign('Tool_idTool')->references('id')->on('tools');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_materials');
    }
};
