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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('News_AutoID');
            $table->string('NewsName');
            $table->string('MediaName');
            $table->date('Dates');
            $table->string('Remarks');
            $table->string('FileName');
            $table->string('Page');
            $table->string('Category');
            $table->string('Author');
            $table->string('MediaNameBangla');
            $table->float('ColumnInch');
            $table->string('Image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
