<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title')->unique();//không được trùng
            $table->string('alias')->nullable();
            $table->text('intro')->nullable();
            $table->longText('content')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('tags')->nullable();
            $table->string('image_link')->nullable();
            $table->string('image_thumnail')->nullable();
            $table->string('views')->nullable();
            $table->integer('user_id')->unsigned();//không được < 0
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');//khi xóa id của users thì xóa luôn những sản phẩm có user_id tương ứng
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('cates')->onDelete('cascade');
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
        Schema::drop('posts');
    }
}
