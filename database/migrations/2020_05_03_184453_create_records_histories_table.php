<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sfferings');
            $table->unsignedBigInteger('stories');
            $table->foreign('sfferings')->references('id')->on('sfferings')->onDelete('cascade');
            $table->foreign('stories')->references('id')->on('stories')->onDelete('cascade');
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
        Schema::dropIfExists('records_histories');
    }
}
