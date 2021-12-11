<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longtext('content')->nullable();
            $table->string('cover')->nullable();
            $table->text('images')->nullable();
            $table->longtext('extra')->nullable();
            $table->tinyinteger('status')->default(0);
            $table->string('meta-description')->nullable();
            $table->string('meta-keywords')->nullable();
            $table->string('meta-author')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
