<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_items', function (Blueprint $table) {
            $table->bigIncrements('item_id')->comment('ID');
            $table->integer('language_id')->unsigned()->comment('言語ID');
            $table->string('url', 255)->nullable()->comment('URL');
            $table->integer('chapter_num')->comment('章');
            $table->integer('chapter_item_num')->comment('章項目');
            $table->string('chapter_item', 50)->comment('項目名');
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
        Schema::dropIfExists('chapter_items');
    }
}
