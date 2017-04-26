<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->nullable();
			$table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('excerpt')->nullable();
			$table->text('content')->nullable();
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('PUBLISHED');
            $table->boolean('featured')->default(0);
            $table->integer('price')->nullable();
            $table->timestamps();

            //$table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
