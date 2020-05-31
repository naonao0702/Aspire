<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClearItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clear_items', function (Blueprint $table) {
            $table->increments('clear_id')->comment('クリアID');
            $table->integer('language_id')->comment('言語ID');
            $table->integer('chapter_num')->comment('章');
            $table->integer('chapter_item_num')->comment('章項目');
            $table->integer('user_id')->comment('ユーザーID');
            $table->string('user_name')->comment('ユーザー名');
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
        Schema::dropIfExists('clear_items');
    }
}
