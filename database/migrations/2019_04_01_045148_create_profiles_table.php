<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->bigInteger('telp');
            $table->bigInteger('kode_pos');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->timestamps();
        });


        DB::table('profiles')->insert(
            array(
                'nama' => 'Smkn 10 JKT',                
                'telp' => '0895380012926',
                'kode_pos' => '13460',                                
                'deskripsi' => 'banyak',
                'gambar' => '10',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
