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
        Schema::create('posts_tag', function (Blueprint $table) {

            $table->integer('posts_id')->unsigned();
            $table->integer('tags_id')->unsigned();
             
             $table->foreign('posts_id')->references('id')->on('posts');
             $table->foreign('tags_id')->references('id')->on('tags');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
