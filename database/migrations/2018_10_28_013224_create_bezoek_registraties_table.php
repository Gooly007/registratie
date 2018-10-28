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
            $table->string('naam',50);
            $table->string('voornaam',50);
            $table->date('date');
            $table->string('tijdin');
            $table->string('kenteken');
            $table->string('reden');
            $table->string('tijduit');
            $table->string('persoon');
            $table->string('buro');
            $table->string('bijzonderheden');
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
