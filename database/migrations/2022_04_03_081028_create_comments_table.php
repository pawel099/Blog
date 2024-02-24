<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('comments_id')->unsigned();
            $table->string('nick');
            $table->string('email');

            $table->text('contents');
            $table->foreign('comments_id')->references('id')->on('posts')->onDelete('cascade');
            $table->timestamps();
        });

Schema::table('comments', function (Blueprint $table) {
            $table->enum('status', [0, 1])->default(0)->after('email');


           });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
