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
        Schema::create('table_books', function (Blueprint $table) {
            $table->id();
            $table->integer('bookid');
            $table->integer('authorid');
            $table->string('title');
            $table->string('ISBN');
            $table->smallInteger('pub_year');
            $table->tinyInteger('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_books');
    }
};
