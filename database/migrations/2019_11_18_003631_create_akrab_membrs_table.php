<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkrabMembrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akrab_membrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jantina');
            $table->string('no_ic');
            $table->string('date_lahir');
            $table->string('nama_kem_jab');
            $table->string('add_kem_jab');
            $table->string('no_tel');
            $table->string('no_fax');
            $table->string('no_ph');
            $table->string('email');
            $table->string('jawatan');
            $table->string('gred');
            $table->string('bil_tahun');
            $table->string('bil_sess');
            $table->string('date_sara');
            $table->rememberToken();
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
        Schema::dropIfExists('akrab_membr');
    }
}
