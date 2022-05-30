<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('tag_id');
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')->onDelete('cascade');

            $table->integer('article_id');
            $table->foreign('article_id')
                ->references('id')
                ->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_articles');
    }
};
