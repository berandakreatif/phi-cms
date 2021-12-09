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
            $table->id();
            $table->integer('cat');
            $table->integer('type');
            $table->string('slug');
            $table->string('title');
            $table->string('subtitle');
            $table->longtext('content');
            $table->string('cover');
            $table->text('images');
            $table->longtext('extra');
            $table->tinyinteger('status');
            $table->string('meta-description');
            $table->string('meta-keywords');
            $table->string('meta-author');
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
        Schema::dropIfExists('posts');
    }
}
