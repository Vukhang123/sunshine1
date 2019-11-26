<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau_sanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma')->comment('Ma san pham');
            $table->unsignedTinyInteger('m_ma')->comment('Ma mau');
            $table->unsignedSmallInteger('msp_soluong')->default('0')->comment('So luong mau san pham');
            
            $table->foreign('sp_ma')
            ->references('sp_ma')->on('sanpham')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

          $table->foreign('m_ma')
          ->references('m_ma')->on('mau')
          ->onDelete('CASCADE')
          ->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau_sanpham');
    }
}
