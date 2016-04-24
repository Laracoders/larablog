<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class FkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function(Blueprint $table){
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('category_id')->references('id')->on('categories');
        });
        Schema::table('authors', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('comments', function(Blueprint $table){
            $table->foreign('post_id')->references('id')->on('posts');
        });
        Schema::table('post_tag', function(Blueprint $table){
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function(Blueprint $table){
            $table->dropForeign('posts_author_id_foreign');
            $table->dropForeign('posts_category_id_foreign');
        });
        Schema::table('authors', function(Blueprint $table){
            // drop the field user_id
            $table->dropForeign('authors_user_id_foreign');
        });
        Schema::table('comments', function(Blueprint $table){
            // drop the field post_id
            $table->dropForeign('comments_post_id_foreign');
        });
        Schema::table('post_tag', function(Blueprint $table){
            // drop the field post_id
            $table->dropForeign('post_tag_post_id_foreign');
            $table->dropForeign('post_tag_tag_id_foreign');
        });
    }
}
