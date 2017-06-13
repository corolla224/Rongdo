<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('bank');
            $table->text('fromBank');
            $table->integer('fromNumber');
            $table->text('frombankName');
            $table->float('amount', 8, 2);
            $table->date('dateadd');
            $table->dateTime('timeadd');
            $table->text('toBank');
            $table->integer('toNumber');
            $table->text('toNamebank');
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
        Schema::dropIfExists('runs');
    }
}
