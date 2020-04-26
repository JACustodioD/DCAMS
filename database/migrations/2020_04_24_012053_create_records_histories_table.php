<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_histories', function (Blueprint $table) {
          $table->bigIncrements('id_records');
          $table->unsignedBigInteger('sfferings');
          $table->unsignedBigInteger('stories');
          $table->foreign('sfferings')->references('id_sfferings')->on('sfferings')->onDelete('cascade');
          $table->foreign('stories')->references('id_stories')->on('stories')->onDelete('cascade');
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
        Schema::dropIfExists('records_history');
    }
}
