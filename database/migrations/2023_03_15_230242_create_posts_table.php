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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name',120)->nullable()->default('text');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('autor')->nullable()->default('anonimo');
            $table->text('description')->nullable();
            $table->enum('state', ['post','no post'])->default('no post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
