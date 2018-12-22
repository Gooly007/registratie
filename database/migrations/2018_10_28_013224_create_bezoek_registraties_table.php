<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBezoekRegistratiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bezoek_registraties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname',25);
            $table->string('firstname',25);
            $table->string('sedula',10);
            $table->string('platenumber',10)->nullable();
            $table->string('reason',50)->nullable();
            $table->string('person',25)->nullable();
            $table->string('particularities',50)->nullable();
            $table->string('badge',5);
            $table->string('propertyaccess',2)->nullable();
            $table->date('date');
            $table->string('timein');
            $table->string('timeout')->nullable();
            $table->string('username');
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
        Schema::dropIfExists('bezoek_registraties');
    }
}
