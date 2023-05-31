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
        Schema::create('tools', function (Blueprint $table) {
            $table->id('id');
            $table->string('name_pt',45);
            $table->string('name_en',45);
            $table->string('effort',45);
            $table->string('origin',45);
            $table->string('type_of_data',45);
            $table->string('users',45);
            $table->string('experts',45);
            $table->string('participants',45);
            $table->string('icon',  45);
            $table->string('tip',45);
            $table->string('templateName',45);
            $table->bigInteger('Stage_idStage')->unsigned();
            $table->foreign('Stage_idStage')->references('id')->on('stages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
