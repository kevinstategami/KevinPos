<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->bigInteger('stock');
            $table->string('kategori')->unsigned();
            $table->string('curr')->unsigned(); 
            $table->string('unit')->unsigned();            
            $table->bigInteger('harga_beli');            
            $table->bigInteger('harga_jual');            
            $table->string('disc')->nullable()->unsigned();  
            $table->text('deskripsi');
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
        Schema::dropIfExists('products');
    }
}
