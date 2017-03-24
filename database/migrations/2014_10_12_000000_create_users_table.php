<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
    /*
      public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('url')->unique();
            $table->int('them-id')->unique();
            $table->int('user-id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }

    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->foreign('user-id');
            ->references('id')->on ('users');
            ->onDelete('cascade);
            ->onUpdate('cascade);
        });
    }

    public function down()
    {
        Schema::table('profileuser');
    }

     public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
             $table->int('blog_id');
            $table->string('title');
            $table->datetime('publish_date');
            $table->string('tags');
            $table->string('permanent_link');
            $table->string('location');
            $table->text('body');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }

     public function up()
    {
        Schema::create('posts_comments', function (Blueprint $table) {
            $table->unsigmedInteger('post_id');
            $table->unsigmedInteger('user_id');
            $table->text('body');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts_comments');
    }
    public function up()
    {
        Schema::table('posts_comments', function (Blueprint $table) {
            $table->foreign('post-id');
            ->references('id')->on ('posts');
            ->onDelete('cascade);
            ->onUpdate('cascade);
             $table->foreign('user-id');
            ->references('id')->on ('users');
            ->onDelete('cascade);
            ->onUpdate('cascade);
        });
    }

    public function down()
    {
         Schema::table('posts_comments', function (Blueprint $table) {
             $table->dropForeign('');
    }
    */

    
}
