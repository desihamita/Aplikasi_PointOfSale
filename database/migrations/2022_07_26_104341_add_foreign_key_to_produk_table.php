<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->integer('id_kategori')->unsigned()->change();
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('restrict')->onUpdate('restrict');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->integer('id_kategori')->change();
            $table->dropForeign('produk_id_kategori_foreign');
        });
    }
}