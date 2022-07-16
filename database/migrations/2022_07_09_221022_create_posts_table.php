<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('prefectures');
            $table->boolean('vocal');
            $table->boolean('guiter');
            $table->boolean('guiter_vocal');
            $table->boolean('bass');
            $table->boolean('drums');
            $table->boolean('keyboard');
            $table->boolean('brass');
            $table->boolean('strings');
            $table->boolean('dj');
            $table->boolean('etc');
            $table->text('pr');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
