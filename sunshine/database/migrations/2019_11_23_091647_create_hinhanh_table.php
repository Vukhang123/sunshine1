<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma')->comment('Ma san pham');
            $table->unsignedTinyInteger('ha_stt')->default('1')->comment('So thu tu hinh anh');
            $table->string('ha_ten',150)->comment('Ten hinh anh');
            
            $table->foreign('sp_ma')
            ->references('sp_ma')->on('sanpham')
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
        Schema::dropIfExists('hinhanh');
    }
}
